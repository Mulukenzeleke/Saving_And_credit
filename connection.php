<?php 
$servername = "localhost";
$conn = mysqli_connect($servername,"root","");
if($conn)
	echo "";
else
echo "".$conn->error;
$sql = "CREATE DATABASE saving_credit";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "";
}
$database=mysqli_select_db($conn,"saving_credit");
if($database)
echo "";
else
echo "";
$sql = "CREATE TABLE registration(
accountNo int primary key auto_increment,
firstname VARCHAR(30) NOT NULL,
username varchar(20) not null,
password varchar(20) not null,
lastname VARCHAR(30) NOT NULL,
gender varchar(50) not null,
proffession varchar(20) not null,
image varchar(20) not null,
ID varchar(20)not null,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error";}
$sql="CREATE TABLE Bankregistration(
bankAccountNo int primary key auto_increment,
username varchar(20) not null,
password varchar(20) not null,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
BankName varchar(20) not null,
gender varchar(50) not null,
proffession varchar(20) not null,
image varchar(20) not null,
ID varchar(20)not null,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "";
}
$sql = "CREATE TABLE bankDeposit(
id  int(11) not null,
bankAccountNo INT(6) not null,foreign key(bankAccountNo) references Bankregistration(bankAccountNo),
remarks varchar(20) not null,
transfer float(10) not null,
credit FLOAT(50) not null,
balance float(20) not null,
interest FLOAT(20) not null,
total_interest float(20),
Ondate TIMESTAMP DEFAULT CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error creating bankdeposit table";
}

$sql = "CREATE TABLE credit(
ID int(11) not null,
accountNo INT(6) not null,foreign key(accountNo) references registration(accountNo),
remarks varchar(20) not null,
loan FLOAT(50) not null,
interest FLOAT(20) not null,
total_interest float(20) not null,
principal float(20) not null,
total_principal float(20) not null,
average_payment float(20) not null,
total_per_month float(20) not null,
total_amount float(20) not null,
Ondate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "credit table";
} else {
  echo "table credit is error";
}
$sql = "CREATE TABLE deposit(
id  int(11) not null,
accountNo INT(6) not null,foreign key(accountNo) references registration(accountNo),
remarks varchar(20) not null,
debt float(10) not null,
credit FLOAT(50) not null,
balance float(20) not null,
interest FLOAT(20) not null,
total_interest float(20),
Ondate TIMESTAMP DEFAULT CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error creating deposit table";
}
$sql = "CREATE TABLE employee(
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
gender varchar(50),
proffession varchar(20),
age int(20),
id  int(11) primary key auto_increment,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "";
}
/*$sql = "CREATE TABLE credit(
accountNo INT(6) not null, foreign key(accountNo) references registration(accountNo),
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
loan FLOAT(50),
interest FLOAT(20),
total_interest float(20),
principal float(20),
total_principal float(20),
average_payment float(20),
total_per_month float(20),
total_amount float(20),
id int(11),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "";
}*/
$sql = "CREATE TABLE share(
accountNo INT(6) not null, foreign key(accountNo) references registration(accountNo),
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
payment FLOAT(50),
level FLOAT(20),
amount float(20),
totalPayment float(20),
id int(11),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "";
}
$sql = "CREATE TABLE login(
username varchar(20),
password varchar(30),
type VARCHAR(30)
)";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "";
}
$sql = "insert into login(
username,
password,
type 
) values('admin','azii','admin'),('employee','bamlak','employee'),('customer','abel','customer')";
 if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "";
}
?>