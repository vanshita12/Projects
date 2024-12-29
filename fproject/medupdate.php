<head>
        <title>finalproject</title>
    </head>
    <body>
    <?php
        $uname=$_POST['name'];

        $bg=$_POST['bg'];
        $ms=$_POST['omc'];
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
                $sql="UPDATE `userd` SET `bloodgroup` = '$bg', `medicalstmt` = '$omc' WHERE `userd`.`username` = '$uname';";

                if($con->query($sql)===true){
                    header("Location:http://localhost/fproject/display.php?status='updated successfully'&name=".$uname);
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
        
       
   ?>
   </body>
</html>
