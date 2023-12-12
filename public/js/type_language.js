document.addEventListener('DOMContentLoaded', function () {
    const tipoIdiomaSelect = document.getElementById('tipoIdiomaSelect');
    const nivelIdiomaSelect = document.getElementById('nivelIdiomaSelect');

    if (tipoIdiomaSelect) {
        tipoIdiomaSelect.addEventListener('change', function () {
            const selectedTipoIdioma = tipoIdiomaSelect.value;
            nivelIdiomaSelect.innerHTML = '<option value="">Select an option</option>';

            if (selectedTipoIdioma) {
                // Puedes ajustar las opciones según tu lógica
                switch (selectedTipoIdioma) {
                    case 'ingles':
                        addOption(nivelIdiomaSelect, '1', 'A1');
                        addOption(nivelIdiomaSelect, '2', 'A2');
                        addOption(nivelIdiomaSelect, '3', 'B1');
                        addOption(nivelIdiomaSelect, '4', 'B2');
                        addOption(nivelIdiomaSelect, '5', 'C1');
                        addOption(nivelIdiomaSelect, '6', 'C2');
                        break;
                    case 'aleman':
                        addOption(nivelIdiomaSelect, '7', 'A1');
                        addOption(nivelIdiomaSelect, '8', 'A2');
                        addOption(nivelIdiomaSelect, '9', 'B1');
                        addOption(nivelIdiomaSelect, '10', 'B2');
                        addOption(nivelIdiomaSelect, '11', 'C1');
                        addOption(nivelIdiomaSelect, '12', 'C2');
                        break;
                    case 'ruso':
                        addOption(nivelIdiomaSelect, '13', 'A1');
                        addOption(nivelIdiomaSelect, '14', 'A2');
                        addOption(nivelIdiomaSelect, '15', 'B1');
                        addOption(nivelIdiomaSelect, '16', 'B2');
                        addOption(nivelIdiomaSelect, '17', 'C1');
                        addOption(nivelIdiomaSelect, '18', 'C2');
                        break;
                }
            }
        });
    }

    function addOption(select, value, text) {
        const option = document.createElement('option');
        option.value = value;
        option.text = text;
        select.add(option);
    }
});
