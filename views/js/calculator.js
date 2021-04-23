let amountSlider = document.querySelector('.amount-slider');
let periodSlider = document.querySelector('.period-slider');
let downpaymentSlider = document.querySelector('.downpayment-slider');

let amountInput = document.querySelector('input#amount');
let periodSelect = document.querySelector('select#period');
let downpaymentSelect = document.querySelector('select#downpayment');

let loanPlaceholder = document.querySelector('#sum');
let paymentPlaceholder = document.querySelector('#payment');

amountInput.value = amountSlider.value;
periodSelect.value = periodSlider.value;
downpaymentSelect.value = downpaymentSlider.value;

let downpayment = Math.round(downpaymentSelect.value / 100 * amountInput.value);
let amount = Math.round((amountInput.value - downpayment) * 1.05);
let payment = ((amount * 1.209 * 1.01) / periodSelect.value).toFixed(1);

loanPlaceholder.innerHTML = amount;
paymentPlaceholder.innerHTML = payment;

amountSlider.addEventListener('input', function () {
    amountInput.value = amountSlider.value;
    setAmount(amountInput.value);
    setDownpaymentPart();
}, false);

amountInput.addEventListener('input', function () {
    amountSlider.value = amountInput.value;
    setAmount(amountSlider.value);
    setDownpaymentPart();
}, false);

periodSlider.addEventListener('input', function () {
    periodSelect.value = periodSlider.value;
    setPayment(periodSelect.value);
}, false);

periodSelect.addEventListener('input', function () {
    periodSlider.value = periodSelect.value;
    setPayment(periodSlider.value);
}, false);

downpaymentSlider.addEventListener('input', function () {
    downpaymentSelect.value = downpaymentSlider.value;
    downpayment = Math.round(downpaymentSelect.value / 100 * amountInput.value);
    setAmountByChangingDownpayment(downpayment);

}, false);

downpaymentSelect.addEventListener('input', function () {
    downpaymentSlider.value = downpaymentSelect.value;
    downpayment = Math.round(downpaymentSlider.value / 100 * amountSlider.value);
    setAmountByChangingDownpayment(downpayment);
}, false);

function setAmount(amount) {
    downpayment = Math.round(downpaymentSelect.value / 100 * amount);
    loanPlaceholder.innerHTML = Math.round((amountInput.value - downpayment) * 1.05);
    paymentPlaceholder.innerHTML = (((amount - downpayment) * 1.05 * 1.209 * 1.01) / periodSlider.value).toFixed(1);
}

function setPayment(payment) {
    paymentPlaceholder.innerHTML = (((amountInput.value - downpayment) * 1.05 * 1.209 * 1.01) / payment).toFixed(1);
}

function setAmountByChangingDownpayment(downpayment) {
    loanPlaceholder.innerHTML = Math.round((amountInput.value - downpayment) * 1.05);
    paymentPlaceholder.innerHTML = (((amountInput.value - downpayment) * 1.05 * 1.209 * 1.01) / periodSlider.value).toFixed(1);
}

function setDownpaymentPart() {
    let calculated = document.querySelectorAll('.opt');

    for (let i = 0; i < calculated.length; i++) {
        let x = Math.round(amountInput.value * (calculated[i].value / 100));
        calculated[i].text = calculated[i].value + '%' + ' | ' + x;
    }
}
setDownpaymentPart();