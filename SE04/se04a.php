<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <?php
    //http://localhost/SE03/se03a.php?n1=8&n2=9&n3=7&n4=5
    $numero1 = $_POST["n1"];
    $numero2 = $_POST["n2"];
    $numero3 = $_POST["n3"];
    $numero4 = $_POST["n4"];
    $media = ($numero1 + $numero2 + $numero3 + $numero4) / 4;
    ?>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <th>Número 1</th>
                <th>Número 2</th>
                <th>Número 3</th>
                <th>Número 4</th>
                <th>Média</th>
            </thead>
            <tbody>
                <td> <?php echo $numero1; ?> </td>
                <td> <?php echo $numero2; ?> </td>
                <td> <?php echo $numero3; ?> </td>
                <td> <?php echo $numero4; ?> </td>
                <td> <?php echo $media; ?> </td>
            </tbody>
        </table>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>