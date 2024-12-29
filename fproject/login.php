<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETag</title>
    <link rel="stylesheet" href="login.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body class="bd" onload="error()">
</br>
<form class="titlebar">
    <div class="d-flex flex-column text-align-center align-items-center">
    <div class="d-flex text-white">
        <h2>WELCOME TO &nbsp;</h2>
        <h2>E-TAG</h2>
      </div>
      <h4 class="text-white">your one better step to safety</h4>
    </div>
</form>
<section class="vh-100 gradient-custom" id="log">
 <div class="container py-4 h-80">
    <form style="text-align: right; margin-bottom: 0;" action="index.html" method="post">
      <input type="submit" class="btn btn-primary" value="Back To Home">
    </form>
     <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-4 text-center">
              
              <h4 class="fw-bold mb-3 ">Welcome To E-TAG</h4>
              <h4 class="fw-bold mb-3 text-uppercase" id="mc">Login</h4>
              <form action="index.php" method="post" id="lgn">
                <div class="form-outline form-white mb-2">
                  <label class="form-label" for="typeEmailX">Email</label> <br>
                  <input type="text" id="typeEmailX" class="form-control-sm" name="uname"/>
                </div>
  
                <div class="form-outline form-white mb-2">
                  <label class="form-label" for="typePasswordX">Password</label> <br>
                  <input type="password" id="typePasswordX" class="form-control-sm" name="pass"/>
                </div>
                  <p class="small mb-3 pb-lg-2" id="fp">
                    <a class="text-white-50" href="http://localhost/fproject/changePassword/changepass.html">
                      Forgot Password?
                    </a>
                  </p>
              <button class="btn btn-outline-light btn-lg" type="submit">Login</button>
            </br>
            </form>




              <form action="signup.php" method="post" id="sup">
                <div class="form-outline form-white mb-2">
                    <label class="form-label" for="typeEmailX">Email</label> <br>
                    <input type="text" id="typeEmailX" class="form-control-sm" name="sname"/>
                  </div>
    
                  <div class="form-outline form-white mb-2">
                    <label class="form-label" for="typePasswordX">Password</label> <br>
                    <input type="password" id="typePasswordX" class="form-control-sm" name="spass"/>
                  </div>    
                
                  <div class="form-outline form-white mb-2">
                    <label class="form-label" for="name">Full Name</label> <br>
                    <input type="text" id="name" class="form-control-sm" name="name"/>
                  </div>  
                  <br>   
              <button class="btn btn-outline-light btn-lg" type="submit">SignUp</button> 
              <br>
            </form>

            <br>
            <p class="mt-3" id="su">
              Don't have an account? <a onclick="signup()" class="text-white-50 fw-bold" >Sign Up</a>
            </p>
            <p class="mt-3" id="lg">Go to login?<a onclick="signtolog()" class="text-white-50 fw-bold" >Login</a></p>
          </div>

          </div>
        
      </div>
    </div>
  </div>
  
</section>

<script src="login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
</body>
</html>