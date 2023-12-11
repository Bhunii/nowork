document.addEventListener("DOMContentLoaded", function() {
    var contenido1 = document.getElementById("contenido_curriculum_estudios");
    var contenido2 = document.getElementById("contenido_curriculum_experiencias");
    var contenido3 = document.getElementById("contenido_curriculum_idiomas");
    var btn1 = document.getElementById("btn_curriculum_1");
    var btn2 = document.getElementById("btn_curriculum_2");
    var btn3 = document.getElementById("btn_curriculum_3");

    if (btn1 && btn2 && btn3) {
        btn1.addEventListener("click", openCurriculumStudies);
        btn2.addEventListener("click", openCurriculumExperiences);
        btn3.addEventListener("click", openCurriculumLanguages);
    }

    function openCurriculumStudies() {
        contenido1.style.display = "flex";
        contenido2.style.display = "none";
        contenido3.style.display = "none";
    }

    function openCurriculumExperiences() {
        contenido1.style.display = "none";
        contenido2.style.display = "flex";
        contenido3.style.display = "none";
    }

    function openCurriculumLanguages() {
        contenido1.style.display = "none";
        contenido2.style.display = "none";
        contenido3.style.display = "flex";
    }s
});
