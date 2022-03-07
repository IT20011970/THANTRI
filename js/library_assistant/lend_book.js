function lendBook(isbn, bookName, bookLogId) {
    document.getElementById('bookIsbn').value = isbn;
    document.getElementById('bookName').value = bookName;
    document.getElementById('bookLogId').value = bookLogId;
    document.getElementById('selectBook').innerHTML = 'This book is to lend';
}

function returnBook(isbn, bookName) {
    window.location.href = 'return_book.php?isbn=' + isbn + '&bookName=' + bookName;
}

function checkBook(event) {
    if (document.getElementById('bookIsbn').value === '') {
        document.getElementById('selectBook').innerHTML = 'Please select a book';
        event.preventDefault();
        return false;
    }
    return true;
}