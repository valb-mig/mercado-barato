$(document).ready(() => {
    $('.date').mask('00/00/0000');

    $('.money').maskMoney({
        prefix: 'R$ ',
        thousands: '.',
        decimal: ',',
        allowZero: true,
        showSymbol: true
    });

    $('.number').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
})