<?php
include('../connect.php');
session_start();
?>
<?php
$id = $_POST['id'];
$danhmuc = $_POST['danhmuc'];
$tensp = $_POST['tensp'];
$gia = $_POST['gia'];
$khuyenmai = $_POST['khuyenmai'];
$soluong = $_POST['soluong'];
$manhinh = $_POST['manhinh'];
$hdh = $_POST['hdh'];
$cpu = $_POST['cpu'];
$ram = $_POST['ram'];
$card = $_POST['card'];
$pin = $_POST['pin'];
// img 1
$img1 = $_FILES['img1'];
$img1Name = $_FILES['img1']['name'];
$img1Tmp = $_FILES['img1']['tmp_name'];
$img1Size = $_FILES['img1']['size'];
$img1Type = $_FILES['img1']['type'];
// Xử lý upload
$img1Ext = explode('.',$img1Name);
$img1Check = strtolower(end($img1Ext));
$img1Array = array('png','jpg','jpeg');
if(in_array($img1Check,$img1Array)){  
    $upload1 = '../sanpham/' .$img1Name;   
    move_uploaded_file($img1Tmp,$upload1);
}
// img 2
$img2 = $_FILES['img2'];
$img2Name = $_FILES['img2']['name'];
$img2Tmp = $_FILES['img2']['tmp_name'];
$img2Size = $_FILES['img2']['size'];
$img2Type = $_FILES['img2']['type'];
// Xử lý upload
$img2Ext = explode('.',$img1Name);
$img2Check = strtolower(end($img1Ext));
$img2Array = array('png','jpg','jpeg');

if(in_array($img2Check,$img2Array)){
    $upload2 = '../sanpham/' .$img2Name;
    move_uploaded_file($img2Tmp,$upload2);
}
// img 3
$img3 = $_FILES['img3'];
$img3Name = $_FILES['img3']['name'];
$img3Tmp = $_FILES['img3']['tmp_name'];
$img3Size = $_FILES['img1']['size'];
$img3Type = $_FILES['img3']['type'];
// Xử lý upload
$img3Ext = explode('.',$img1Name);
$img3Check = strtolower(end($img1Ext));
$img3Array = array('png','jpg','jpeg');
if(in_array($img3Check,$img3Array)){
    $upload3 = '../sanpham/' .$img3Name;
    move_uploaded_file($img3Tmp,$upload3);
}
$sql = mysqli_query($connect,"update sanpham set danhmuc_id='$danhmuc', tensp = '$tensp', gia = '$gia', khuyenmai = '$khuyenmai', soluong = '$soluong', manhinh = '$manhinh',hdh = '$hdh', cpu = '$cpu', ram = '$ram', card = '$card', pin = '$pin', img1 = '$img1Name', img2 = '$img2Name', img3 = '$img3Name' where id = '$id'");
if($sql){
    header('location:../admin/index.php');
}
?>