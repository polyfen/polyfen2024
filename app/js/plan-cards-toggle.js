document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.toggle-container button');
    const starterPrice = document.getElementById('starter').querySelector('h4');
    const proPrice = document.getElementById('pro').querySelector('h4');
    const starterPriceButton = document.getElementById('starter').querySelector('.start-today-button');
    const proPriceButton = document.getElementById('pro').querySelector('.start-today-button');

    /* obtiene los valores desde el data-price-* de los h4 */
    const mStarterPrice = starterPrice.dataset.priceM;
    const mProPrice = proPrice.dataset.priceM;
    const qStarterPrice = starterPrice.dataset.priceQ;
    const qProPrice = proPrice.dataset.priceQ;
    
    /* links de pago para las 4 variantes */
    const mStarterLink = "https://buy.stripe.com/test_7sI7suaS65k39G05kk";
    const mProLink = "https://buy.stripe.com/test_cN2cMOf8m9Aj7xS5km";
    const qStarterLink = "https://buy.stripe.com/test_3cs28ad0e9Aj2dy001";
    const qProLink = "https://buy.stripe.com/test_9AQ5kmgcq4fZ8BWbIL";

    /* define el text-content de los h4 al cargar la pagina*/
    starterPrice.textContent = qStarterPrice;
    proPrice.textContent = qProPrice;
    /* define el href de los botones al cargar la pagina*/
    starterPriceButton.href = qStarterLink;
    proPriceButton.href = qProLink;

    buttons.forEach(button => {

        button.addEventListener('click', () => {
            if (button.classList.contains('inactive-button')) {
                buttons.forEach(e => {
                    e.classList.toggle('active-button');
                    e.classList.toggle('inactive-button');
                });

                if (starterPrice.textContent === mStarterPrice) {
                    /* para quarterly */
                    starterPrice.textContent = qStarterPrice;
                    starterPriceButton.href = qStarterLink;
                    proPrice.textContent = qProPrice;
                    proPriceButton.href = qProLink;

                } else {
                    /* para mensual */
                    starterPrice.textContent = mStarterPrice;
                    starterPriceButton.href = mStarterLink;
                    proPrice.textContent = mProPrice;
                    proPriceButton.href = mProLink;
                }
            }
        });
    });
});
