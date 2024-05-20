function updatePlans(data) {
    const starterPrice = document.getElementById('starter').querySelector('h4');
    const proPrice = document.getElementById('pro').querySelector('h4');
    const starterPriceButton = document.getElementById('starter').querySelector('.start-today-button');
    const proPriceButton = document.getElementById('pro').querySelector('.start-today-button');

    starterPrice.textContent = data.starter.price;
    starterPriceButton.href = data.starter.stripeUrl;
    proPrice.textContent = data.pro.price;
    proPriceButton.href = data.pro.stripeUrl;
}

document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.toggle-container button');

    const initialData = subscriptionPlans.quarterly;
    updatePlans(initialData);

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            if (button.classList.contains('inactive-button')) {
                buttons.forEach(e => {
                    e.classList.toggle('active-button');
                    e.classList.toggle('inactive-button');
                });

                let data;
                if(button.dataset.period === 'monthly') {
                    data = subscriptionPlans.monthly;
                } else {
                    data = subscriptionPlans.quarterly;
                }

                updatePlans(data);
            }
        });
    });
});
