// function ShowHide(){
//     var container = document.getElementsByClassName("show_hide_container")[0];
//     var containerStyle = window.getComputedStyle(container);
//     var btn = document.getElementById("btnShow");

//     if(containerStyle.visibility == "hidden"){
//         container.style.visibility = "visible";
//         btn.innerHTML = "Cancelar";
//     }else{
//         container.style.visibility = "hidden";
//         btn.innerHTML = "Actualizar Pefil Ocupacional";
//     }
// }

function ShowContainer() {
    var container = document.getElementsByClassName("show_hide_container")[0];
    var container = document.querySelector('.show_hide_container');
    container.style.display = 'block';
    container.style.visibility = "visible";
    document.getElementById("btnShow").style.display = "none";
    document.getElementById("btnHide").style.display = "inline-block";
}

function HideContainer() {
    var container = document.getElementsByClassName("show_hide_container")[0];
    var container = document.querySelector('.show_hide_container');
    scontainer.style.display = 'none';
    container.style.visibility = "hidden";
    document.getElementById("btnShow").style.display = "inline-block";
    document.getElementById("btnHide").style.display = "none";
}
