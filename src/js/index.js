"use strict"

let iconDelete = document.querySelectorAll(".delete");
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


window.addEventListener('load', initEdit, false);
function initEdit() {
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
window.addEventListener('load', initDelete, false);
function initDelete() {
    iconDelete.forEach((img) => {
        img.addEventListener("mouseover", changeImgDelete, false);
        img.addEventListener("mouseout", initialImgDelete, false);
    })
}

function changeImgDelete() {
    this.setAttribute('src','public/img/deleteColored.svg');   
}

function initialImgDelete(){
    this.setAttribute('src','public/img/iconDelete.svg');   
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





