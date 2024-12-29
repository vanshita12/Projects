<head>
        <title>finalproject</title>
    </head>
    <body>
    <?php
        $uname=$_POST['name'];

        $gn2=$_POST['gno1'];
        $gn1=$_POST['gno2'];
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
                $sql="UPDATE `userd` SET `contact` = '$gn1', `gcontact` = '$gn2' WHERE `userd`.`username` = '$uname';";

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
