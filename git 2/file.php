<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file.php" method="post">
        <input type="file" name="file" class="">
        <input type="submit" value="submit" name="sub">
    </form>
</body>
</html>
<?php
    if(isset($_POST["sub"]))
    {
    move_uploaded_file($_FILES['file']['tmp'] ,"\Doc/".$_FILES['file']['tmp']);    
    }
    ?>