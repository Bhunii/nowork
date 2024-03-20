document.addEventListener('DOMContentLoaded', function () {
    const occupationSelect = document.getElementById('occupationSelect');
    const functionsContainer = document.getElementById('functionsContainer');
    const functionsInput = document.querySelector('input[name="functions"]');

    if (occupationSelect && functionsContainer && functionsInput) {
        occupationSelect.addEventListener('change', function () {
            functionsContainer.innerHTML = ''; // Limpiar functionsContainer antes de agregar nuevas funciones

            const selectedOccupation = occupationSelect.value;
            if (selectedOccupation) {
                const functionsData = JSON.parse(occupationSelect.options[occupationSelect.selectedIndex].getAttribute('data-functions'));

                functionsData.forEach(function (func) {
                    const div = document.createElement('div');
                    const checkbox = document.createElement('input');
                    const span = document.createElement('span');
                    span.textContent = func.description;
                    checkbox.setAttribute('type', 'checkbox');
                    checkbox.setAttribute('value', func.description); // Establecer el valor del checkbox como la descripción
                    checkbox.addEventListener('change', function () {
                        // Manejar cambios en el checkbox para actualizar el campo de funciones
                        const selectedFunctions = Array.from(functionsContainer.querySelectorAll('input[type="checkbox"]:checked'))
                            .map(checkbox => checkbox.value);
                        functionsInput.value = selectedFunctions.join(', '); // Juntar todas las descripciones seleccionadas
                    });
                    div.appendChild(checkbox);
                    div.appendChild(span);
                    functionsContainer.appendChild(div);
                });
            }
        });
    }
});
