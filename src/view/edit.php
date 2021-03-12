<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" name="Name" value="<?php echo $store['Name']?>" class="form-control" id="formGroupExampleInput" placeholder="nhập tên">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Type</label>
        <input type="text" name="Type" value="<?php echo $store['Type']?>" class="form-control" id="formGroupExampleInput2" placeholder="nhập Loai">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input type="Number" name="Price"   value="<?php echo $store['Price']?>" class="form-control" id="formGroupExampleInput" placeholder="Nhap Gia ">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Amount</label>
        <input type="number" name="Amount" value="<?php echo $store['Amount']?>" class="form-control" id="formGroupExampleInput" placeholder="Nhap So Luong ">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Date</label>
        <input type="text" name="Date" value="<?php echo $store['Date']?>" class="form-control" id="formGroupExampleInput" placeholder="Nhap Ngay Nhap ">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Descirbe</label>
        <input type="text" name="Descirbe" value="<?php echo $store['Descirbe']?>" class="form-control" id="formGroupExampleInput" placeholder=" Nhap thong tin ">
    </div>


    <button type="submit">Thay Doi thong tin</button>

</form>
</body>
</html>
