<?php
include('../connect.php');
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../BOOTSTRAP-4/css/bootstrap.min.css">
<script type="text/javascript" src="../BOOTSTRAP-4/js/jquery.min.js"></script>
<script type="text/javascript" src="../BOOTSTRAP-4/js/popper.min.js"></script>
<script type="text/javascript" src="../BOOTSTRAP-4/js/bootstrap.min.js"></script>
<title>Chức Năng Thêm</title>
</head>

<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="" method="post" enctype="multipart/form-data">
					<table class="table table-hover table-bordered table-striped table-dark text-center">
						<thead>
							<tr>
								<th colspan="2">Chức Năng Thêm</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Danh Mục</td>
								<td>
									<select name="danhmuc" class="form-control">
										<option value="">Chọn Danh Mục</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Tên Sản Phẩm</td>
								<td><input type="text" name="tensp" class="form-control" value="" placeholder="Nhập tên sản phẩm"></td>
							</tr>
							<tr>
								<td>Giá</td>
								<td><input type="text" name="gia" class="form-control" value="" placeholder="Nhập giá sản phẩm"></td>
							</tr>
							<tr>
								<td>Khuyến Mãi</td>
								<td><input type="text" name="khuyenmai" class="form-control" value="" placeholder="Nhập giá khuyến mãi sản phẩm"></td>
							</tr>
							<tr>
								<td>Số Lượng</td>
								<td><input type="number" class="form-control" min="0" placeholder="Nhập số lượng sản phẩm" name="soluong"></td>
							</tr>
							<tr>
								<td>Màn Hình</td>
								<td><input type="text" name="manhinh" class="form-control" value="" placeholder="Nhập tên màn hình của sản phẩm"></td>
							</tr>
							<tr>
								<td>Hệ Điều Hành</td>
								<td><input type="text" name="hdh" class="form-control" value="" placeholder="Nhập hệ điều hành của sản phẩm"></td>
							</tr>
							<tr>
								<td>Chip Set (CPU)</td>
								<td><input type="text" name="cpu" class="form-control" value="" placeholder="Nhập tên chipset của sản phẩm"></td>
							</tr>
							<tr>
								<td>Ram</td>
								<td><input type="text" name="ram" class="form-control" value="" placeholder="Nhập tên ram của sản phẩm"></td>
							</tr>
							<tr>
								<td>Card Màn Hình</td>
								<td><input type="text" name="card" class="form-control" value="" placeholder="Nhập tên card màn hình của sản phẩm"></td>
							</tr>
							<tr>
								<td>Dung Lượng Pin</td>
								<td><input type="text" name="pin" class="form-control" value="" placeholder="Nhập dung lượng pin của sản phẩm"></td>
							</tr>
							<tr>
								<td>Ảnh Sản Phẩm 1</td>
								<td><input type="file" name="img1" class="form-control"></td>
							</tr>
							<tr>
								<td>Ảnh Sản Phẩm 2</td>
								<td><input type="file" name="img2" class="form-control"></td>
							</tr>
							<tr>
								<td>Ảnh Sản Phẩm 3</td>
								<td><input type="file" name="img3" class="form-control"></td>
							</tr>
							<tr>
								<td colspan="2">
                                    <?php
                                    if(isset($_POST['themsp'])){
                                        if(empty($_POST['danhmuc']) || empty($_POST['tensp']) || empty($_POST['gia']) || empty($_POST['khuyenmai']) || empty($_POST['soluong']) || empty($_POST['manhinh']) || empty($_POST['hdh']) || empty($_POST['cpu']) || empty($_POST['ram']) || empty($_POST['card']) || empty($_POST['pin'])){
                                            echo "Người dùng chưa nhập thông tin !";
                                        }else{
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
                                            if(!is_numeric($_POST['gia']) || !is_numeric($_POST['khuyenmai'])){
                                                echo "Phải nhập số không được nhập ký tự !";
                                            }else{
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
                                                $sql = mysqli_query($connect,"INSERT INTO `sanpham`(`danhmuc_id`, `tensp`, `gia`, `khuyenmai`, `soluong`, `manhinh`, `hdh`, `cpu`, `ram`, `card`, `pin`, `img1`, `img2`, `img3`) VALUES ('$danhmuc','$tensp','$gia','$khuyenmai','$soluong','$manhinh','$hdh','$cpu','$ram','$card','$pin','$img1Name','$img2Name','$img3Name')");
                                                if($sql){
                                                    header('location:../admin/index.php');
                                                }
                                            }
                                        }
                                    }
                                    ?>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" class="btn btn-danger" value="Thêm Sản Phẩm" name="themsp">
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>