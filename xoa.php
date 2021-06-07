<?php
include('../connect.php');
session_start();
?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = '';
}
$sql = mysqli_query($connect,"delete from sanpham where id = '$id'");
if($sql){
    header('location:../admin/index.php');
}
?>