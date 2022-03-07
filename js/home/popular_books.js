var imgArr=[];
var i = 0;
var pic = 0;

function runCarousel(imgsArr) {
    imgArr = imgsArr;
    console.log(imgArr)
    changeBook();
    setInterval(function () {
        changeBook();
    }, 5000)
}

function bookNext() {
    changeBook();
}

function bookPrevious() {
    changeBook();
}

function changeBook() {
    pic = i;
    document.getElementById('bookImgTop').src = imgArr[i++][1];
    if (i === imgArr.length) {
        i = 0;
    }
}

function goToBook() {
    window.location.href = 'book_info.php?isbn=' + imgArr[pic][0]
}

////////////////////////

function reserveBook(isbn, bookName) {
    document.getElementById('bookIsbn').value = isbn;
    document.getElementById('bookName').value = bookName;
    document.getElementById('selectBook').innerHTML = 'This book is to reserve';
}

function checkBook() {
    if (document.getElementById('bookIsbn').value === '') {
        document.getElementById('selectBook').innerHTML = 'Please select a book';
    }
    return false;
}

/////////////////////////

// function changeCategory() {
//     var tableData = '' +
//         '<tr>' +
//         '<td>Date</td>' +
//         '<td>ISBN</td>' +
//         '<td>Book Name</td>' +
//         '<td>Book</td>' +
//         '<td>Status</td>' +
//         '<td width="20%"></td>' +
//         '</tr>';
//     i = 0;
//
//     if (document.getElementById('subjectCat').value === 'web') {
//         imgArr = [['ISBN345', '../../images/books/angular.jpg'], ['ISBN356', '../../images/books/js.jpg']];
//         tableData += '' +
//             '<tr>' +
//             '<td>2020-02-02</td>' +
//             '<td>' + imgArr[0][0] + '</td>' +
//             '<td>Angular</td>' +
//             '<td style="text-align: center"><img class="bookImg" src="' + imgArr[0][1] + '" alt=""></td>' +
//             '<td>Not reserved</td>' +
//             '<td onclick="reserveBook(\'' + imgArr[0][0] + '\',\'Angular\')">Click to reserve the book</td>' +
//             '</tr>' +
//             '<tr>' +
//             '<td>2020-02-02</td>' +
//             '<td>' + imgArr[1][0] + '</td>' +
//             '<td>Javascript</td>' +
//             '<td style="text-align: center"><img class="bookImg" src="' + imgArr[1][1] + '" alt=""></td>' +
//             '<td>Not reserved</td>' +
//             '<td onclick="reserveBook(\'' + imgArr[1][0] + '\',\'Javascript\')">Click to reserve the book</td>' +
//             '</tr>';
//
//     } else if (document.getElementById('subjectCat').value === 'se') {
//         imgArr = [['ISBN456', '../../images/books/cpro.jpg'], ['ISBN567', '../../images/books/mysql.jpg']];
//         tableData += '' +
//             '<tr>' +
//             '<td>2020-02-02</td>' +
//             '<td>' + imgArr[0][0] + '</td>' +
//             '<td>C Programming</td>' +
//             '<td style="text-align: center"><img class="bookImg" src="' + imgArr[0][1] + '" alt=""></td>' +
//             '<td>Not reserved</td>' +
//             '<td onclick="reserveBook(\'' + imgArr[0][0] + '\',\'C Programming\')">Click to reserve the book</td>' +
//             '</tr>' +
//             '<tr>' +
//             '<td>2020-02-02</td>' +
//             '<td>' + imgArr[1][0] + '</td>' +
//             '<td>MySQL</td>' +
//             '<td style="text-align: center"><img class="bookImg" src="' + imgArr[1][1] + '" alt=""></td>' +
//             '<td>Not returned</td>' +
//             '<td>Cannot borrow the book</td>' +
//             '</tr>';
//
//     } else if (document.getElementById('subjectCat').value === 'cn') {
//         imgArr = [['ISBN355', '../../images/books/download.jpg'], ['ISBN123', '../../images/books/cn.jpg']];
//         tableData += '' +
//             '<tr>' +
//             '<td>2020-02-02</td>' +
//             '<td>' + imgArr[0][0] + '</td>' +
//             '<td>Beginner</td>' +
//             '<td style="text-align: center"><img class="bookImg" src="' + imgArr[0][1] + '" alt=""></td>' +
//             '<td>Not reserved</td>' +
//             '<td onclick="reserveBook(\'' + imgArr[0][0] + '\',\'Beginner\')">Click to reserve the book</td>' +
//             '</tr>' +
//             '<tr>' +
//             '<td>2020-02-02</td>' +
//             '<td>' + imgArr[1][0] + '</td>' +
//             '<td>Data Communication</td>' +
//             '<td style="text-align: center"><img class="bookImg" src="' + imgArr[1][1] + '" alt=""></td>' +
//             '<td>Not reserved</td>' +
//             '<td onclick="reserveBook(\'' + imgArr[1][0] + '\',\'Data Communication\')">Click to reserve the book</td>' +
//             '</tr>';
//
//     }
//
//     changeBook();
//     document.getElementById('tableBooks').innerHTML = tableData;
// }