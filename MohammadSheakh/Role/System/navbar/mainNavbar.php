<?php
session_start();
$flag = false;
?>
<div>
    
    <table align="center">
        <tr>
            <td>
                <h5>University </h5>
            </td>
            <td>
                <h1> &nbsp;&nbsp;&nbsp;&nbsp;</h1>
            </td>
            <td>
                <button> <a href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/system/home/home.php">Home</a> </button>
                <button> <a href="/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/system/ourServices/ourServices.php">Dashboard</a> </button>
                
                <?php 

                    $fullNameVariable = '';
                    if(isset($_SESSION["fullName"])){
                        $fullNameVariable = $_SESSION["fullName"];
                    }
                    if($fullNameVariable){
                        $flag = true;
                    }
                ?>
                <?php
                if($flag == false){
                    echo "
                    <button> <a href='/MohammadSheakh/Role/system/authentication/login/login.php'>Login</a> </button>
                <button> <a href='/MohammadSheakh/Role/system/authentication/registration/registration.php'>Sign up</a> </button>
                    ";
                }
                if($flag){
                    echo "
                    <button> <a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/passengerProfile/subNavbar/personalInformation/personalInformation.php'>Profile</a> </button>
            
                    <button> <a href='/LocalBusTicketingSystem/LocalBusTicketingSystem/Role/passenger/authentication/logout/logoutProcess.php'>Logout</a> </button>
            
                    ";
                }
                ?>
                
                
                </td>
        </tr>
    </table>
    
</div>