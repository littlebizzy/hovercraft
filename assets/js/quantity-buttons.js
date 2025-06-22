document.addEventListener('DOMContentLoaded', function () {
    const qtyContainers = document.querySelectorAll('div.quantity:not(.buttons-added)');
    qtyContainers.forEach(function(container) {
        const input = container.querySelector('input.qty');
        if (!input) return;

        container.classList.add('buttons-added');

        const minus = document.createElement('button');
        minus.type = 'button';
        minus.className = 'qty-button minus';
        minus.textContent = '-';

        const plus = document.createElement('button');
        plus.type = 'button';
        plus.className = 'qty-button plus';
        plus.textContent = '+';

        input.readOnly = true;

        container.insertBefore(minus, input);
        container.appendChild(plus);

        minus.addEventListener('click', function () {
            let value = parseFloat(input.value) || 0;
            let step = parseFloat(input.step) || 1;
            input.value = Math.max(value - step, parseFloat(input.min) || 0);
            input.dispatchEvent(new Event('change'));
        });

        plus.addEventListener('click', function () {
            let value = parseFloat(input.value) || 0;
            let step = parseFloat(input.step) || 1;
            let max = parseFloat(input.max);
            let newVal = value + step;
            if (!isNaN(max)) newVal = Math.min(newVal, max);
            input.value = newVal;
            input.dispatchEvent(new Event('change'));
        });
    });
});

// Ref: ChatGPT
// Ref: https://wordpress.org/plugins/qty-increment-buttons-for-woocommerce/
