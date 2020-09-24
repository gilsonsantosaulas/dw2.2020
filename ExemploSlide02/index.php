<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <a href="http://localhost/ExemploSlide02/index.php?n1=20&n2=30">
            http://localhost/ExemploSlide02/index.php?n1=20&n2=30
        </a>
    </div>

    <?php
    $numero1 = $_GET["n1"];
    $numero2 = $_GET["n2"];
    $total = $numero1 + $numero2;
    ?>

    <h1> <?php echo $total; ?> </h1>

</body>

</html>