var $currentDate = new Date();
$("#tax_date").datetimepicker({
    viewMode: 'days',
    format: 'YYYY-MM-DD',
    defaultDate: $currentDate,
    maxDate: new Date(),
    minDate: $currentDate.setYear($currentDate.getYear() + 1895) //some dirty hack that I don't understand
});

var paymentSumInput = document.getElementById('tax_paymentSum');
paymentSumInput.setAttribute('type', 'number');
paymentSumInput.setAttribute('step', 'any');