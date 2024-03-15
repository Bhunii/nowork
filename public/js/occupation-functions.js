document.addEventListener('DOMContentLoaded', function () {
    const occupationSelect = document.getElementById('occupationSelect');
    const functionsContainer = document.getElementById('functionsContainer');

    if (occupationSelect) {
        occupationSelect.addEventListener('change', function () {
            const selectedOccupation = occupationSelect.value;
            functionsContainer.innerHTML = '';

            if (selectedOccupation) {
                const functionsData = JSON.parse(occupationSelect.options[occupationSelect.selectedIndex].getAttribute('data-functions'));

                functionsData.forEach(function (func) {
                    const div = document.createElement('div');
                    const checkbox = document.createElement('input');
                    const span = document.createElement('span');
                    const span2 = document.createElement('span');
                    span.textContent = func.code;
                    span2.textContent = func.description;
                    checkbox.setAttribute('type', 'checkbox');
                    div.appendChild(checkbox);
                    div.appendChild(span);
                    div.appendChild(span2);
                    functionsContainer.appendChild(div);
                });
            }
        });
    }
});
