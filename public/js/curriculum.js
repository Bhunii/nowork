var contenido1 = document.getElementById("contenido_curriculum_studies");
var contenido2 = document.getElementById("contenido_curriculum_experiences");
var contenido3 = document.getElementById("contenido_curriculum_languages");
// var contenido4 = document.getElementById("contenido4");
var btn1 = document.getElementById("btn_curriculum_1");
var btn2 = document.getElementById("btn_curriculum_2");
var btn3 = document.getElementById("btn_curriculum_3");
// var btn4 = document.getElementById("btn4");

function openCurriculumStudies(){
    contenido1.style.transform = "translateX(0%)";
    contenido2.style.transform = "translateX(100%)";
    contenido3.style.transform = "translateX(100%)";
    // contenido4.style.transform = "translateX(100%)";
}

function openCurriculumExperiences(){
    contenido1.style.transform = "translateX(100%)";
    contenido2.style.transform = "translateX(0%)";
    contenido3.style.transform = "translateX(100%)";
    // contenido4.style.transform = "translateX(100%)";
}
function openCurriculumLanguages(){
    contenido1.style.transform = "translateX(100%)";
    contenido2.style.transform = "translateX(100%)";
    contenido3.style.transform = "translateX(0%)";
    // contenido4.style.transform = "translateX(100%)";
}
// function openIdiomas(){
//     contenido1.style.transform = "translateX(100%)";
//     contenido2.style.transform = "translateX(100%)";
//     contenido3.style.transform = "translateX(100%)";
//     // contenido4.style.transform = "translateX(0%)";
// }
