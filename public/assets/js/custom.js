function formatCurrency() {
    let input = document.getElementById('priceInput');
    let value = input.value.replace(/\D/g, '');
    value = (value / 100).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    input.value = value;
}

function formatCurrencyPriceDiscount() {
    let input = document.getElementById('discountPriceInput');
    let value = input.value.replace(/\D/g, '');
    value = (value / 100).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    input.value = value;
}
