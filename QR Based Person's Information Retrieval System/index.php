
    <?php
         $uname=$_POST['uname'];
         $password=$_POST['pass'];
         $error="invalid email or password!";
 
        //database connections
        $con=new mysqli("localhost","root","","DATABASE");
        if($con->connect_error){
            die("failed to connect : ".$con->connect_error);
        } else {
            $stmt=$con->prepare("select * from userd where username=?");
            $stmt->bind_param("s",$uname);
            $stmt->execute();
            $stmt_result=$stmt->get_result();
            if($stmt_result->num_rows>0){
                $data=$stmt_result->fetch_assoc();
                if($data['password']===$password){
                   header("Location:http://localhost/fproject/index.html?name=".$uname);
                   exit();
                }
                else{
                    header("Location:http://localhost/fproject/login.php?error='invalid email or password'");
                    exit();
                }
            } else{
                echo "<h2>Invalid email or password</h2>";
            }
        }
   ?>
