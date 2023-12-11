document.addEventListener('DOMContentLoaded', function () {
    const departamentSelect = document.getElementById('departamentSelect');
    const municipalitySelect = document.getElementById('municipalitySelect');

    if (departamentSelect) {
        departamentSelect.addEventListener('change', function () {
            const selectedDepartament = departamentSelect.value;
            municipalitySelect.innerHTML = '<option value="">Select an option</option>';

            if (selectedDepartament) {
                const municipalities = JSON.parse(departamentSelect.options[departamentSelect.selectedIndex].getAttribute('data-municipalities'));

                console.log('Municipalities:', municipalities);

                municipalities.forEach(function (municipality) {
                    const option = document.createElement('option');
                    option.value = municipality.id;
                    option.text = municipality.name;
                    municipalitySelect.add(option);
                });
            }
        });
    }
});

