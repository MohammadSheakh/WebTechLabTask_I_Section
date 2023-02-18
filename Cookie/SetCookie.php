<?php
$cookie_name = "color";
$cookie_value = $_POST['color'];
setcookie($cookie_name, $cookie_value, time() + $_POST['expires'], "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(empty($_POST['color'])){
            // taile login page ei back korbo .. 
            header("Location: Cookie.php");
            
        }else{
            // fullame jodi empty hoy .. taileo page 1 er kaseo return korbe ..   
            header("Location: Cookie.php?color="."$cookie_value"); // page change hoye new location e chole jabe 
            // 302 mane redirect 
        }
        
    }
    // else{
    //     //echo "Invalid Request";
    //     header("Location: Page1.php");
    // }
    
    
    ?>
</body>
</html>
