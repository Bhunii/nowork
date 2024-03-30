document.addEventListener("DOMContentLoaded", function() {
    function checkPassword() {
        let password = document.getElementById("password").value;
        let cnfrmPassword = document.getElementById("cnfrm-password").value;
        console.log(" Password:", password,'\n',"Confirm Password:",cnfrmPassword);
        let message = document.getElementById("message");

        if (password.length != 0) {
            if (password == cnfrmPassword) {
                message.textContent = "Password confirmed";
                message.style.color = "#726692";
            } else {
                message.textContent = "Passwords don't match";
                message.style.color = "#973245";
            }
        } else {
            message.textContent = "";
        }
    }

    document.getElementById("password").addEventListener("input", checkPassword);
    document.getElementById("cnfrm-password").addEventListener("input", checkPassword);
});
