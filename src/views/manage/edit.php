<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a {
            display: inline-block;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            line-height: 25px;
            color: #ffff;
        }
    </style>
</head>
<body>

<div class="container">
<div style="color: red">
    <?php echo $error; ?>
</div>
<div class="modal-dialog bg-info">

        <form method="post" id="recordFor">
            <div class="modal-content">
                <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-plus"></i>Sửa thông tin dự án</h4>
                </div>
                <div class="modal-body">
                        <div class="form-group my-3">
                            <label for="name" class="control-label">Tên dự án</label>
                            <input type="text" require name="txtName" value="<?php echo isset($_POST['txtName']) ? $_POST['txtName'] : $blood['tenduan']?>"/>			
                        </div>
                        <div class="form-group my-3">
                            <label for="age" class="control-label">Năm thực hiện</label>							
                            <input type="text" require name="txtYear" value="<?php echo isset($_POST['txtYear']) ? $_POST['txtYear'] : $blood['namthuchien']?>" />							
                        </div>	 	
                        <div class="form-group my-3">
                            <label for="lastname" class="control-label">Lĩnh vực</label>							
                            <input type="text" require name="txtLinhVuc" value="<?php echo isset($_POST['txtLinhVuc']) ? $_POST['txtLinhVuc'] : $blood['linhvuc']?>" />				
                        </div>	
                        <div class="form-group my-3">
                            <label for="address my-3" class="control-label">Nhiệm vụ</label>							
                            <input type="text" require name="txtNhiemVu" value="<?php echo isset($_POST['txtNhiemVu']) ? $_POST['txtNhiemVu'] : $blood['nhiemvu']?>" />
                        </div>
                        <div class="form-group my-3">
                            <label for="lastname" class="control-label">Cơ quan thực hiện</label>							
                            <input type="text" require name="txtCQTH" value="<?php echo isset($_POST['txtCQTH']) ? $_POST['txtCQTH'] : $blood['coquanthuchien']?>" />
                        </div>					
                </div>
                <div class="modal-footer">
                        <input type="submit" name="submit" value="Update" />
                </div>
            </div>
        </form>
    
</div>
</div>


</body>
</html>









