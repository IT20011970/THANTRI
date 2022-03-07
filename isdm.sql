drop database LibraryManagementSystem;
create database LibraryManagementSystem;
use LibraryManagementSystem;

create table Category(
	CategoryId varchar(20),
    CategoryName varchar(50),
    constraint Category_PK  primary key (CategoryId)
);

create table Book(
	ISBN varchar(50),
    BookName varchar(100),
    CategoryId varchar(20),
    Image varchar(50),
    Author varchar(100),
    Qty int,
    constraint ISBN_PK primary key (Isbn),
    constraint Book_Category_FK foreign key (CategoryId) references Category (CategoryId)
);

create table UserType(
	UserTypeId int,
    UserTypeName varchar(20),
    constraint UserType_PK primary key (UserTypeId)
);

create table LibraryUser(
	UserId varchar(20),
    Title varchar(6),
    NameInitials varchar(40),
    FirstName varchar(20),
    MiddleName varchar(20),
	LastName varchar(35),
	Address1 varchar(30),
	Address2 varchar(30),
	City varchar(25),
	NIC varchar(13),
	Gender varchar(6),
	DOB date,
    UserPassword varchar(20),
    UserTypeId int,
    UserEmail varchar(30),
    EmailAlert tinyint(1),
    Occupation varchar(15),
	Mobile int(10),
	HomeLine int(10),
    Confirm varchar(1),
    constraint User_PK primary key (UserId),
    constraint User_UserType_FK foreign key (UserTypeId) references UserType (UserTypeId)
);

create table BookLog(
	BookLogId int auto_increment,
	ISBN varchar(50),
    UserId varchar(20),
    LendDate Date,
    ReturnDueDate Date,
    ReturnedDate Date,
    BookStatus int, -- Borrow - 0, Return - 1, Reserved - 2, Returned but not paid - 3
    constraint BookLog_PK primary key (BookLogId),
    constraint BookLog_ISBN_FK foreign key (ISBN) references Book (ISBN),
    constraint BookLog_User_FK foreign key (UserId) references LibraryUser (UserId)
);

create table Payment(
	PaymentId int auto_increment,
    BookLogId int,
    Amount double,
    PaymentDate date,
    constraint Payment_PK primary key (PaymentId),
    constraint Payment_BookLog_FK foreign key (BookLogId) references BookLog (BookLogId)
);

create table Suggestion(
	SuggestionId int auto_increment,
    UserEmail varchar(30),
    UserTypeId int,
    SuggestionText varchar(200),
    constraint Suggestion_PK primary key (SuggestionId),
    constraint Suggestion_UserType_FK foreign key (UserTypeId) references UserType (UserTypeId)
);

create table FineAmount(
	Qty int,
    Amount double
);

create table Duration(
	DurationValue int
);

INSERT INTO `librarymanagementsystem`.`usertype`
(`UserTypeId`,
`UserTypeName`)
VALUES
(1,'Library Assistant'),
(2,'Library Clerk'),
(3,'Librarian'),
(4,'Member'),
(5,'Guest');

INSERT INTO `librarymanagementsystem`.`category`
(`CategoryId`,
`CategoryName`)
VALUES
(1,'Software Engineering'),
(2,'Web Designing'),
(3,'Computer Networks'),
(4,'Business'),
(5,'Arts');

INSERT INTO `librarymanagementsystem`.`book`
(`ISBN`,
`BookName`,
`CategoryId`,
`Image`,
`Author`,
`Qty`)
VALUES
('ISBN456','C Programming',1,'cpro.jpg','George',5),
('ISBN567','MySQL',1,'mysql.jpg','Micheal',6),
('ISBN345','Angular',2,'angular.jpg','Sam',7),
('ISBN356','Javascript',2,'js.jpg','George',4),
('ISBN355','Beginner',3,'download.jpg','John',3),
('ISBN123','Data Communication',3,'cn.jpg','Geany',2);

INSERT INTO `librarymanagementsystem`.`libraryuser`
(`UserId`,
`Title`,
`NameInitials`,
`FirstName`,
`MiddleName`,
`LastName`,
`Address1`,
`Address2`,
`City`,
`NIC`,
`Gender`,
`DOB`,
`UserPassword`,
`UserTypeId`,
`UserEmail`,
`Occupation`,
`Mobile`,
`HomeLine`,
`Confirm`)
VALUES
('IT19973470','Mr','Gunawardana I.I.E','Imalka','Ishara','Gunawardana','50','Old Kesbewa Road','Raththanpitiya','957931009V','Male', '1995-05-07','789','1','imalka@gmail.com','Librarian','0754585277','0458453678','0'),
('IT20011970','Mr','Bamunusingha G.P.','Gayan','Poornima','Bamunusingha','20','Seelarathana road','Colombo','977856932V','Male', '1999-07-06','123',2,'gayan@gmail.com','Library Manager','0766409484','0112353628','0'),
('IT20008796','Miss','Madhuhansi D.D','Danushi','Dilhara','Maduhansi','12','New road','Nugegoda','987931078V','Female', '1998-10-20','456',3,'danushi@gmail,com','Library Clerk','0785635277','0552853678','0'),
('IT20265410','Miss','Premathilake H.T.M.','Thulya','Madhawee','Premathilake','56','Rathna Road','Delkanda','997931009V','Female', '1999-10-19','258',4,'thulya@gmail,com','Data Entry','0776715609','1552523678','0'),
('IT20382476','Miss','Perera P.V.Y.','Varnavi','Yohani','Perera','75','Horana road','Piliyandala','996001543V','Female', '1999-04-28','369',4,'varnavi@gmail.com','Web developer','0703087670','0885654678','0');

INSERT INTO `librarymanagementsystem`.`booklog`
(`BookLogId`,
`ISBN`,
`UserId`,
`LendDate`,
`ReturnDueDate`,
`ReturnedDate`,
`BookStatus`)
VALUES
(1,'ISBN567','IT19973470','2020-10-22','2020-10-22','2020-10-22',2),
(2,'ISBN567','IT20011970','2020-10-22','2020-10-22','2020-10-22',2),
(3,'ISBN345','IT20008796','2020-10-21','2020-10-21','2020-10-21',2),
(4,'ISBN345','IT20265410','2020-10-21','2020-10-21','2020-10-21',2),
(5,'ISBN345','IT20382476','2020-10-21','2020-10-21','2020-10-21',2);

INSERT INTO `librarymanagementsystem`.`payment`
(`PaymentId`,
`BookLogId`,
`Amount`,
`PaymentDate`)
VALUES
(1,1,'50','2020-02-02'),
(2,1,'40','2020-02-04'),
(3,2,'33','2020-04-02'),
(4,3,'22','2020-03-02'),
(5,4,'85','2020-02-03');

INSERT INTO `librarymanagementsystem`.`suggestion`
(`SuggestionId`,
`UserEmail`,
`UserTypeId`,
`SuggestionText`)
VALUES
(1,'gayan@gmail.com',4,'ABC'),
(2,'imalka@gmail.com',5,'wer'),
(3,'varnavi@gmail.com',4,'wed'),
(4,'thulya@gmail.com',5,'xcsdec'),
(5,'dhanushi@gmail.com',4,'aweq');



INSERT INTO `librarymanagementsystem`.`duration`
(`durationvalue`)
VALUES
(7);

INSERT INTO `librarymanagementsystem`.`fineamount`
(`Qty`,
`Amount`)
VALUES
(1,10.50);

INSERT INTO `librarymanagementsystem`.`fineamount`
(`Qty`,
`Amount`)
VALUES
(1,10.50);