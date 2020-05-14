<?php
//hostname or ip of server
$servername='localhost';

//username and password
$dbusername='root';
$dbpassword='';
$link=mysqli_connect("$servername","$dbusername","$dbpassword")
or die ("Not able to connect to server");
if($link)
{
    echo "ok...koneksi berhasil";
}
?>
<br>
<?php

$link=mysqli_connect("localhost","root","");

$dbname="lat_dbase";

$cek=mysqli_query($link,"CREATE DATABASE $dbname") or die("Couldn't Create Database:$dbname");
if($cek)
{
    echo "Database $dbname berhasil dibuat";
}
?>
<br>

<?php

$link=mysqli_connect("localhost","root",""); //koneksi
$db=("lat_dbase");
mysqli_select_db($link,$db);//mengaktifkan database
//membuat tabel
$sql="CREATE TABLE tbl_mhs(mhsID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(mhsID),
FirstName varchar(15),
LastName varchar(15),
Age int)";
mysqli_query($link,$sql);
//input data
$input=mysqli_query($link, "insert into tbl_mhs(FirstName,LastName,Age) VALUES ('Anjar','Prabowo',25)");
?>
<br>

<?php
$con =mysqli_connect("localhost","root","");
$db=("lat_dbase");
if(!$con)
{
    die('Could not connect: '.mysqli_error());
}
mysqli_select_db($con,$db);
mysqli_query($con,"INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES ('Karina','Suwandi','29')");
mysqli_query($con,"INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES ('Glenn','Gandari','32')");
mysqli_close($con);
?>