<?php


$mysqli1=new mysqli("localhost" ,"root","","robotside");

 if ($mysqli1->connect_error) {
  die("Error connecting to database" . $mysqli1->connect_error);
}else{
echo "connected to mysql";
}

// $Forward = $_POST['Forward'];
// $stop = $_POST['stop'];
// $backward = $_POST['backward'];
// $motor4 = $_POST['left'];
// $motor5 = $_POST['right'];
//
//

$sth = $mysqli1->prepare("SELECT  forward , rights,  backward , lefts , stop FROM side");


if(isset($_POST['forward'])){
    echo" your choose \n";
    $result = $sth->fetchColumn(1);
    echo "direction = $result\n"; }

if(isset($_POST['right'])){
  echo" your choose \n";
  $result = $sth->fetchColumn(2);
  echo "direction = $result\n"; }


if(isset($_POST['backward'])){
  echo" your choose \n";
  $result = $sth->fetchColumn(3);
  echo "direction = $result\n"; }


if(isset($_POST['left'])){
  echo" your choose \n";
  $result = $sth->fetchColumn(4);
  echo "direction = $result\n";  }


  if(isset($_POST['stop'])){
    echo" your choose \n";
    $result = $sth->fetchColumn(5);
    echo "direction = $result\n";  }
?>
