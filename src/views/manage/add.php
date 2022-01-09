<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm dự án</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-info">
    <h1 class="text-center">
    Thêm dự án
    </h1>

<!--</form>-->
<div style="color: red">
    <?php echo $error; ?>
</div>
<form method="post" action="">
    Tên dự án :
    <input type="text" require name="txtName" value="" class = "my-2" />
    <br />
    Năm thực hiện :
    <input type="text" require name="txtYear" value="" class = "my-2"/>
    <br />
    Lĩnh vực :
    <input type="text" require name="txtLinhVuc" value="" class = "my-2"/>
    <br />
    Nhiệm vụ :
    <input type="text" require name="txtNhiemVu" value="" class = "my-2"/>
    <br />
    Cơ quan thực hiện :
    <input type="text" require name="txtCQTH" value="" class = "my-2"/>
    <br />
   
    <input type="submit" require name="submit" value="Save" />
</form>
</div>
</body>
</html>



