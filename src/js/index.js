"use strict"

let icon = document.querySelectorAll(".edit");
const table = document.getElementById("scrollYTable");

change();
function change(){
  if (window.screen.width < 700){
    table.classList.remove("table-bordered");
    table.classList.remove("table-striped");
  }
}

let colorCell = document.querySelectorAll(".color");
let subjectCell = document.querySelectorAll(".subject");


window.addEventListener('load', init, false);
function init() {
    icon.forEach((img) => {
        img.addEventListener("mouseover", changeImg, false);
        img.addEventListener("mouseout", initialImg, false);
    })
}


function changeImg() {
    this.setAttribute('src','public/img/editColored.svg');   
}

function initialImg(){
    this.setAttribute('src','public/img/iconEdit.svg');   
}


const subjectColors = {
    red: ["English", "Biology", "Sports"],
    green: ["Nature"],
    yellow: ["Software", "Development"],
    blue: ["Language"],
    orange: ["maths"]
}

for(const color in subjectColors) {
    const subjectArray = subjectColors[color];
    subjectCell.forEach((subject, index) => {
        if(subjectArray.includes(subject.innerHTML)) {
            colorCell[index].style = `background-color: ${color};`;
        }
    })
} 





