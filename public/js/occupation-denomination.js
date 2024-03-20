document.addEventListener('DOMContentLoaded', function () {
    const occupationSelect = document.getElementById('occupationSelect');
    const denominationSelect = document.getElementById('denominationSelect');

    if (occupationSelect && denominationSelect) {
        occupationSelect.addEventListener('change', function () {
            const selectedOccupation = occupationSelect.value;
            denominationSelect.innerHTML = '<option value="">Select an option</option>';

            if (selectedOccupation) {
                const selectedOccupationData = JSON.parse(occupationSelect.options[occupationSelect.selectedIndex].getAttribute('data-denominations'));

                selectedOccupationData.forEach(function (denomination) {
                    const option = document.createElement('option');
                    option.value = denomination.id; // Valor de la opción es la ID de la denominación
                    option.textContent = denomination.description; // Descripción de la denominación
                    denominationSelect.appendChild(option);
                });
            }
        });
    }
});
