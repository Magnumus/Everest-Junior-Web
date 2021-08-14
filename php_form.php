<?php
    if($_GET['submit']){
        if($_GET['surname'] && $_GET['birthday']){
            $date = $_GET['birthday'];
            $surname = $_GET['surname'];
            $age = "";
            for($i = 0; $i < 4; $i++){
                $age .= $date[$i];
            }
            $age = 2021 - $age;
            $string = "Hello $surname! Your age is $age";
        }
        else if($_GET['surname'] && !$_GET['birthday']){ $surname = $_GET['surname']; $string = "Hello $surname!";}
        else if(!$_GET['surname'] && $_GET['birthday']){ 
            $date = $_GET['birthday']; 
            $age = "";
            for($i = 0; $i < 4; $i++){
                $age .= $date[$i];
            }
            $age = 2021 - $age;
            $string = "Your age is $age";
        }
        else $string = "Enter data!";

        echo "<div class='alert alert-success' role='alert'>" . $string . "</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="get" class="container form">
       <?php $type = "color"; ?>
       <?php $type = "date"; $null = 0; ?>
        <p>Дата рождения<input class="form-control" type="<?php echo $type; ?>" name="birthday"></p>
        <p>Фамилия<input class="form-control" type="text" name="surname"></p>
        <p>2+2 = <?php echo 2+3; ?></p>
        <input class="form-control bg-primary text-light" type="submit" name="submit">
    </form>
</body>
</html>
