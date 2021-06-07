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
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<table class="table table-hover table-bordered table-striped table-dark text-center">
						<thead>
							<tr>
								<th colspan="2">Chức Năng Thêm</th>
							</tr>
						</thead>
						<tbody>
                            <?php
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                            }
                            $sql = mysqli_query($connect,"select *from sanpham where id = '$id'");
                            $i = 0;
                            while($row = mysqli_fetch_array($sql)){
                                $i++;
                            ?>
                            <tr>
                                <td>STT</td>
                                <td><input type="text" name="id" value="<?php echo $id; ?>" class="form-control"></td>
                            </tr>
							<tr>
								<td>Danh Mục</td>
								<td>
									<input type="number" name="danhmuc" value="<?php echo $row['danhmuc_id']; ?>" class="form-control">
								</td>
							</tr>
							<tr>
								<td>Tên Sản Phẩm</td>
								<td><input type="text" name="tensp" class="form-control" value="<?php echo $row['tensp']; ?>"></td>
							</tr>
							<tr>
								<td>Giá</td>
								<td><input type="text" name="gia" class="form-control" value="<?php echo $row['gia']; ?>"></td>
							</tr>
							<tr>
								<td>Khuyến Mãi</td>
								<td><input type="text" name="khuyenmai" class="form-control" value="<?php echo $row['khuyenmai']; ?>"></td>
							</tr>
							<tr>
								<td>Số Lượng</td>
								<td><input type="number" name="soluong" class="form-control" value="<?php echo $row['soluong']; ?>"></td>
							</tr>
							<tr>
								<td>Màn Hình</td>
								<td><input type="text" name="manhinh" class="form-control" value="<?php echo $row['manhinh']; ?>"></td>
							</tr>
							<tr>
								<td>Hệ Điều Hành</td>
								<td><input type="text" name="hdh" class="form-control" value="<?php echo $row['hdh']; ?>"></td>
							</tr>
							<tr>
								<td>Chip Set (CPU)</td>
								<td><input type="text" name="cpu" class="form-control" value="<?php echo $row['cpu']; ?>"></td>
							</tr>
							<tr>
								<td>Ram</td>
								<td><input type="text" name="ram" class="form-control" value="<?php echo $row['ram']; ?>"></td>
							</tr>
							<tr>
								<td>Card Màn Hình</td>
								<td><input type="text" name="card" class="form-control" value="<?php echo $row['card']; ?>"></td>
							</tr>
							<tr>
								<td>Dung Lượng Pin</td>
								<td><input type="text" name="pin" class="form-control" value="<?php echo $row['pin']; ?>"></td>
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
									<input type="submit" class="btn btn-danger" value="Sửa Sản Phẩm" name="sua">
								</td>
							</tr>
                            <?php
                            }
                            ?>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>