function formatarMoeda() {
    let input = document.getElementById('priceInput');
    let value = input.value.replace(/\D/g, '');
    value = (value / 100).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    input.value = value;
}
