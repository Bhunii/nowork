document.addEventListener('DOMContentLoaded', function () {

    function buscarVacante() {
        let query = document.getElementById("buscarVacante").value.trim().toUpperCase();
        let vacantes = document.querySelectorAll('.contenedor_vacante');

        if (query === "") {
            vacantes.forEach(vacante => {
                vacante.classList.remove('ocultar');
                vacante.classList.remove('mostrar');
            });
        } else {
            vacantes.forEach(vacante => {
                let departamento = vacante.getAttribute('data-departamento').toUpperCase();

                if (departamento === query) {
                    vacante.classList.add('mostrar');
                    vacante.classList.remove('ocultar');
                } else {
                    vacante.classList.remove('mostrar');
                    vacante.classList.add('ocultar');
                }
            });
        }

        document.getElementById("buscarVacante").value = "";
    }


    document.getElementById("btnBuscarVacante").addEventListener("click", buscarVacante);
});
