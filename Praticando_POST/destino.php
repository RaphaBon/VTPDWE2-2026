<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $title = $_POST["title"];
        $body = $_POST["body"];
        $color = $_POST["color"];
        $img = $_POST["img"];
        $link = $_POST["link"];
        $backgroundColor = $_POST["backgroundColor"];

    ?>

    <div class="container">
    <h1><?php echo $title ?></h1>

    <p><?php echo $body ?> </p>

    <img src="<?php echo $img?>" alt="">

    <p><a href="<?php echo $link ?>"><?php echo $link ?></a></p>

    <style>
        body{
             background-color: <?php echo $backgroundColor ?>;
        }

        .container{
            align-items: center;
            margin: 10px 50px 10px 50px; 
        }

        img{
            width: 50vh;
        }

        p{
            color: <?php echo $color ?>;
        }
    </style>

    </div>

</body>
</html>