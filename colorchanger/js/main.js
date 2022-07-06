const button = document.getElementById("btn");
const color = document.querySelector(".color");

const mas  = [
    "0",
    "1",
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9",
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
];

button.addEventListener("click", () => {
    let masColor = generateMas();
    document.body.style.backgroundColor = masColor;
    color.textContent =  masColor;
});

function generateMas() {
    let masColor = "#"
    for (let i = 0; i < 6; i++) {
        masColor += mas[getRandomNumber()];
    }

    return masColor;
}

function getRandomNumber(){
    return Math.floor(Math.random() * mas.length);
}