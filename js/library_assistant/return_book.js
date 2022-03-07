function checkBook(event) {
    if (document.getElementById('bookIsbn').value === '') {
        document.getElementById('selectBook').innerHTML = 'Please select a book';
        event.preventDefault();
        return false;
    }
    return true;
}

function returnBook(isbn, bookName, bookLogId, fine, duration, payAndSubmit) {
    if (duration <= 0) {
        document.getElementById('btnSubmitPay').disabled = true;
        document.getElementById('bookStatus').value = 1;
    } else {
        document.getElementById('btnSubmitPay').disabled = false;
        document.getElementById('bookStatus').value = 3;
    }
    document.getElementById('selectBook').innerHTML = 'This book is to return';
    document.getElementById('fineAmount').value = fine;
    document.getElementById('bookIsbn').value = isbn;
    document.getElementById('bookName').value = bookName;
    document.getElementById('bookLogId').value = bookLogId;
    document.getElementById('payAndSubmit').value = payAndSubmit;
    document.getElementById('amount').value = fine;
}