<html>
    <head>
        <title>Password Change</title>
    </head>
    <body>
    <?php
        $uname=$_POST['uname'];
        $password=$_POST['pass'];
        $repass=$_POST['repass'];
        if($password==$repass){
        //database connections
        $con=new mysqli("localhost","root","","DATABASE");
        if($con->connect_error){
            die("failed to connect : ".$con->connect_error);
        } 
        else{
            $stmt=$con->prepare("select * from userd where username=?");
            $stmt->bind_param("s",$uname);
            $stmt->execute();
            $stmt_result=$stmt->get_result();
            if($stmt_result->num_rows>0){

                $sql="UPDATE `userd` SET `password` = '$password' WHERE `userd`.`username` = '$uname'";
                if($con->query($sql)===true){
                    header("Location:http://localhost/fproject/changePassword/changepass.html?change='Password Updated!'");
                    exit();
                }
                else{
                    echo "Error updating record:";
                    $con->error;
                }
            } 
            else{
                echo "<h2>Invalid email</h2>";
            }
        }
        }
        else{
                echo "<h2>password and reentered password doesn't match</h2>";
        }
   ?>
   </body>
</html>
