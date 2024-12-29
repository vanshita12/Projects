<html>
    <head>
        <title>finalproject</title>
    </head>
    <body>
    <?php
        $uname=$_POST['sname'];
        $password=$_POST['spass'];
        $name=$_POST['name'];

        // Create connection
        $con = new mysqli('localhost','root', '', 'DATABASE');
         
        // Check connection
        if ($con->connect_error) {
            die("Connection failed: ".$conn->connect_error);
        }else{
            $stmt=$con->prepare("INSERT INTO userd(username,password,name)VALUES
            (?,?,?)");
            $stmt->bind_param("sss",$uname,$password,$name);
            $stmt->execute();
            header("Location:http://localhost/fproject/login.php?status='Successfully Registered'");
            $stmt->close();
            $con->close();
        }

    ?>
    </body>
</html>