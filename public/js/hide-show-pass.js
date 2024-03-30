document.addEventListener('DOMContentLoaded', function () {
    const   pass = document.getElementById("pass");
    const   icon = document.querySelector(".bx");

    icon.addEventListener("click", e => {
        if (pass.type === "password"){
            pass.type = "text";
            icon.classList.remove('bx-show-alt')
            icon.classList.add('bx-hide')
        } else {
            pass.type = "password"
            icon.classList.add('bx-show-alt')
            icon.classList.remove('bx-hide')
        }
    })
})
