var query = window.location.search;
query = query.split('=')[1];

if (query === 'ISBN345') {
    document.getElementById('bookImg').src = '../../images/books/angular.jpg';
    document.getElementById('bookTitle').innerHTML = 'ISBN345 - Angular';
} else if (query === 'ISBN356') {
    document.getElementById('bookImg').src = '../../images/books/js.jpg';
    document.getElementById('bookTitle').innerHTML = 'ISBN356 - Javascript';
} else if (query === 'ISBN456') {
    document.getElementById('bookImg').src = '../../images/books/cpro.jpg';
    document.getElementById('bookTitle').innerHTML = 'ISBN456 - C Programming';
} else if (query === 'ISBN567') {
    document.getElementById('bookImg').src = '../../images/books/mysql.jpg';
    document.getElementById('bookTitle').innerHTML = 'ISBN567 - MySQL';
} else if (query === 'ISBN355') {
    document.getElementById('bookImg').src = '../../images/books/download.jpg';
    document.getElementById('bookTitle').innerHTML = 'ISBN355 - Beginner';
} else if (query === 'ISBN123') {
    document.getElementById('bookImg').src = '../../images/books/cn.jpg';
    document.getElementById('bookTitle').innerHTML = 'ISBN123 - Data Communication';
}