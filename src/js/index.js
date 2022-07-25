

let colorCell = document.querySelectorAll(".color");
let subjectCell = document.querySelectorAll(".subject");

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





