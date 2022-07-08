document.addEventListener('DOMContentLoaded', () => {
    const endday = new Date('Jul 9 2022 21:00:00');

    const hoursVal = document.querySelector('.time-count-hours .time-count-val');
    const minutesVal = document.querySelector('.time-count-minutes .time-count-val');
    const secondsVal = document.querySelector('.time-count-seconds .time-count-val');

    const hoursText = document.querySelector('.time-count-hours .time-count-text');
    const minutesText = document.querySelector('.time-count-minutes .time-count-text');
    const secondsText = document.querySelector('.time-count-seconds .time-count-text');

    function declOfNum(number, titles) {  
        let cases = [2, 0, 1, 1, 1, 2];  
        return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];  
    }

    const timeCount = () =>  {
        let now = new Date ();
        let leftUntil = endday - now;

        let hours = Math.floor(leftUntil / 1000 / 60 / 60) % 24;
        let minutes = Math.floor(leftUntil / 1000 / 60) % 60;
        let seconds = Math.floor(leftUntil / 1000) % 60;

        hoursVal.textContent = hours;
        minutesVal.textContent = minutes;
        secondsVal.textContent = seconds;

        hoursText.textContent = declOfNum(hours, ['час', 'часа', 'часов']);
        minutesText.textContent = declOfNum(minutes, ['минута', 'минуты', 'минут']);
        secondsText.textContent = declOfNum(seconds, ['секнуда', 'секунды', 'секунд']);
    };

    timeCount();
});