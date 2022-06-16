<?php
$con = mysqli_connect('localhost', 'root', '','iibm');


$nayaksir = $_POST['nayaksir'];
$ganeshsir = $_POST['ganeshsir'];
$nirupamsir = $_POST['nirupamsir'];
$nileshsir = $_POST['nileshsir'];
$riyajsir = $_POST['riyajsir'];
$Rohitsir = $_POST['Rohitsir'];
$rajeshsir = $_POST['rajeshsir'];

$sql = "INSERT INTO `teacher` (`A.K Nayak Sir`, `Ganesh Sir`, `Nirupam sir`, `Nilesh Sir`,`Riyaj Sir`,`Rohit Sir`,`Rajesh Sir`) VALUES ('$nayaksir', '$ganeshsir', '$nirupamsir', '$nileshsir','$riyajsir','$Rohitsir','$rajeshsir')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>

