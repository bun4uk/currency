var $currentDate = new Date();
$("#tax_date").datetimepicker({
    viewMode: 'days',
    format: 'YYYY-MM-DD',
    defaultDate: $currentDate,
    maxDate: new Date(),
    minDate: $currentDate.setYear($currentDate.getYear() + 1895) //some dirty hack that I don't understand
});
$('#paymentInForeignCurrency').bind('change', function () {
    if (this.checked) {
        $('.sumForeignCurrency, .currency').removeClass('hidden');
        document.getElementById("tax_sumForeignCurrency").setAttribute("required", "required");
    } else {
        $('.sumForeignCurrency, .currency').addClass('hidden');
        document.getElementById("tax_sumForeignCurrency").removeAttribute("required");
    }
});