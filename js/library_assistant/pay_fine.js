function calcFineRemaining(id, val1, val2) {
    document.getElementById('paymentId').value = id;
    document.getElementById('fineAmount').value = (val2 - val1).toFixed(2);
}

function checkPayment(event) {
    if (document.getElementById('fineAmount').value === '' || document.getElementById('fineAmount').value === '0.00') {
        event.preventDefault();
        return false;
    }
    return true;
}