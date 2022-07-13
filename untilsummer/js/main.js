document.addEventListener('DOMContentLoaded', () => {
    const endday = new Date('Sep 1 2022 00:00:01');

    const daysVal = document.querySelector('.time-count-days .time-count-val');
    const hoursVal = document.querySelector('.time-count-hours .time-count-val');
    const minutesVal = document.querySelector('.time-count-minutes .time-count-val');
    const secondsVal = document.querySelector('.time-count-seconds .time-count-val');

    const daysText = document.querySelector('.time-count-days');
    const hoursText = document.querySelector('.time-count-hours');
    const minutesText = document.querySelector('.time-count-minutes');
    const secondsText = document.querySelector('.time-count-seconds');

    const timeCount = () =>  {
        let now = new Date ();
        let leftUntil = endday - now;

        let days = Math.floor(leftUntil / 1000 / 60 / 60/ 24);
        let hours = Math.floor(leftUntil / 1000 / 60 / 60) % 24;
        let minutes = Math.floor(leftUntil / 1000 / 60) % 60;
        let seconds = Math.floor(leftUntil / 1000) % 60;

        daysVal.textContent = days;
        hoursVal.textContent = hours;
        minutesVal.textContent = minutes;
        secondsVal.textContent = seconds;

        let  timerId = null;
        timerId = setInterval(timeCount, 1000);
    };

    timeCount();
});