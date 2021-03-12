
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

</header>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h3> Quan Ly Cua Hang </h3>

    <a href="index.php?page=add" class="btn" style="background-color:saddlebrown">Them Hang Hoa</a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col">Amount</th>
            <th scope="col">Date</th>
            <th scope="col">Descirbe</th>

            <th colspan="2" scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($stores as $key=>$store):?>
            <tr>
                <th scope="row"><?php echo $key+1?></th>
                <td><?php echo $store['Name']?></td>
                <td><?php echo $store['Type']?></td>
                <td><?php echo $store['Price']?></td>
                <td><?php echo $store['Amount']?></td>
                <td><?php echo $store['Date']?></td>
                <td><?php echo $store['Descirbe']?></td>

                <td><a href="index.php?page=delete&id=<?php echo $store['Id'] ?>"
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa ')"
                       class="btn btn-danger">Delete</a></td>
                <td><a href="index.php?page=edit&id=<?php echo $store['Id'] ?>" class="btn btn-success">Edit</a></td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>

</body>
</html>


