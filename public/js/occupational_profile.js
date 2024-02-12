document.addEventListener("DOMContentLoaded", function() {
    var contenedorVisible = document.getElementById("contenedor_visible");
    var contenedorNoVisible = document.getElementById("contenedor_no_visible");

    var btnShow = document.getElementById("btnShow");
    var btnHide = document.getElementById("btnHide");

    if (btnShow && btnHide) {
        btnShow.addEventListener("click", showContainer);
        btnHide.addEventListener("click", hideContainer);
    }

    function showContainer() {
        contenedorVisible.style.display = "none";
        contenedorNoVisible.style.display = "flex";
    }

    function hideContainer() {
        contenedorVisible.style.display = "flex";
        contenedorNoVisible.style.display = "none";
    }
});
