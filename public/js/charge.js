document.addEventListener('DOMContentLoaded', function () {
    const occupationSelect = document.getElementById('occupationSelect');
    const functionsCheckboxList = document.getElementById('functionsCheckboxList');

    occupationSelect.addEventListener('change', function () {
        const selectedOccupationId = occupationSelect.value;
        functionsCheckboxList.innerHTML = '';

        if (selectedOccupationId) {
            const selectedOccupation = @json($occupations->where('id', $selectedOccupationId)->first());

            const functions = selectedOccupation.functions.filter(func => func.code_occupation == selectedOccupationId);

            functions.forEach(function (func) {
                const checkboxContainer = document.createElement('div');

                checkboxContainer.innerHTML = `
                    <input type="checkbox" name="functions[]" value="${func.id}" id="function_${func.id}">
                    <label for="function_${func.id}">${func.description}</label>
                `;

                functionsCheckboxList.appendChild(checkboxContainer);
            });
        }
    });
});
