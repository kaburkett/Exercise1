<?php
//connect to db
include_once('db_connect.php');

//values passed from html form
$name = $_POST['employee_name'];
$salary = $_POST['employee_salary'];
$bonus = $salary*.1;

//insert user entered values
if (mysql_query ("INSERT INTO example1(name, salary, bonus) VALUES('$name','$salary','$bonus')")){
	echo "Successfully Inserted";}
else {
	echo "Insertion Failed";
}

mysql_close($link);
?>