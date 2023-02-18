<?php 
 $color = "#fffff";
 $expires = [];
 $thisPageColor = "#ffffff";
?>

<?php 
            if(isset($_GET['color'])){
                $thisPageColor = $_GET['color'] ; //$_POST['color'] // $_GET['color']
            }
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


    <div style="background-color: <?= $thisPageColor ?>" >
    
        <h1>Cookie Example</h1>
        <h5>Time zone : Asia/Dhaka</h5>
        <hr>
        <h3>Set Cookie</h3>
        <hr>
        <form action="SetCookie.php" method="post">
            <table>
            <tr>
                <td>Select a color </td>
                <td><input type="color" name="color" id="color"></td>
            </tr>
            <tr>
                <td>Expire on : </td>
                <td><input type="time" name ="expires" id="expires"></td>
                <td><?php $_POST['expires'] ?></td>
            </tr>
            <tr>
                <td><button type="submit">Set Cookie</button></td>
            </tr>
        </table>
        </form>

        <h3>Destroy Cookie</h3>
        <form action="DestroyCookie.php">
        <button >Destroy Cookie</button> 
        </form>
        <?php 
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
        ?>
        

        <hr>
        
    </div>

</body>
</html>
