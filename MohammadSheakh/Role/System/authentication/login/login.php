<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include '../../../system/navbar/mainNavbar.php';
        // $fullNameVariable = '';
        // if(isset($_SESSION['fullName'])){
        //     $fullNameVariable = $_SESSION["fullName"];
        // }
        // if($fullNameVariable){
        //     header('location:../../passengerProfile/subNavbar/personalInformation/personalInformation.php');
                    
        // }
    ?>
    
    <table align="center">
        <tr>
            <td>
                <br>
                <br>
                <br>
                <fieldset>
                    <legend>Login Form </legend>
                    <!-- ---------------------------------------- -->
                    <form action="./loginProcess.php" method="post" novalidate>
                        <table>

                            <tr>
                                <td>
                                    <p>Email</p>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="email" id="email" name="email" value=""
                                        placeholder="Please enter your email...  ">
                                         <?php
                                            if(isset($_SESSION['emailErrorMsg'])){
                                                echo "<p>".$_SESSION['emailErrorMsg']."</p>";
                                            }
                                        ?>
                                        
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Password</p>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="password" id="password" name="password" value=""
                                        placeholder="Please enter your email...  ">
                                        <?php
                                            if(isset($_SESSION['passErrorMsg'])){
                                                echo "<p>".$_SESSION['passErrorMsg']."</p>";
                                            }
                                        ?>
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p> Type</p>
                                </td>
                                <td>:</td>
                                <td>
                                      <input type="radio" id="teacher" name="type" value="teacher">
                                      <label for="teacher">teacher</label>
                                      <input type="radio" id="student" name="type" value="student">
                                      <label for="student">student</label> <br>
                                    <?php
                    if(isset($_SESSION['typeErrorMsg'])){
                        echo "<p>".$_SESSION['typeErrorMsg']."</p>";
                    }
                ?>
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="checkbox" name="rememberMe" id="rememberMe" >Remember Me</input></td>
                            </tr>
                            <tr align="center">
                                
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td><button type="submit"> Login </button>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td> <a href="">Forgot Password</a></td>

                            </tr>



                        </table>
                    </form>


                </fieldset>
            </td>
        </tr>

    </table>
</body>

</html>