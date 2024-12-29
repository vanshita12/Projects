<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-TAG</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="QR/css/style.css">
	
	<style>
		#hide{
			display="none";
		}
		.qr-code {
            margin-top: 20px;
            text-align: center; /* Center the QR code */
        }
	</style>
</head>
<?php
        $uname=$_GET['name'];

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
                $data=$stmt_result->fetch_assoc();
                $pass=$data['password'];
                $name=$data['name'];
				$age=$data['age'];
				$gender=$data['gender'];
                $pin=$data['pincode'];
                $district=$data['district'];
                $state=$data['state'];
                $country=$data['country'];
                $dob=$data['dob'];
                $contact=$data['contact'];
                $gcontact=$data['gcontact'];
                $bloodgroup=$data['bloodgroup'];
                $medical=$data['medicalstmt'];
                $height=$data['height'];
                $weight=$data['weight'];
                $unique=$data['uniqueid'];
				$qr=$data['qr_hash'];
            } 
            
        }
       
   ?>
<body onload="update(); generateQR()">
<script>
		function url(){
			const url=new URL(window.location.href);
            var n= url.searchParams.get('name');
			window.location.href="http://localhost/fproject/index.html?name="+n;
		}
	</script>
    <br>
	<section class="ftco-section" style="padding: 0em 0;">
		<div class="container">
				<form style="text-align: right; margin-bottom: 0;" action="index.html" method="post">
					<input type="button" class="btn btn-primary" value="Back To Home" onclick="url()">
				</form>
				<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-0">
					<h2 class="heading-section">USER PROFILE</h2>
				</div>
			</div>
			
			<div class="row justify-content-center">
			
				<div class="col-md-10">

						<div class="row">
							
							<div class="col-md-12">
								<div class="row no-gutters">
									<div class="col-lg-12 col-md-12 order-md-last d-flex align-items-stretch">
										<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4" style="color: #01d28e;">Personal Information</h3>
										<canvas id="qr-code"></canvas>
											<form  action="pupdate.php" method="POST" id="contactForm" name="contactForm" class="contactForm">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="name">Full Name</label>
															<input type="text" class="form-control" name="name"
																id="name" placeholder="Name" value="<?php echo $name?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="dob">Date of Birth</label>
															<input type="date" class="form-control" name="dob"
																id="dob" placeholder="Date" value="<?php echo $dob?>">
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="phno">Phone Number</label>
															<input type="tel" class="form-control" name="phno"
																id="phno" placeholder="Number" value="<?php echo $contact?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="country">Country</label>
															<input type="text" class="form-control" name="country"
																id="country" placeholder="country" value="<?php echo $country?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="state">State</label>
															<input type="text" class="form-control" name="state"
																id="state" placeholder="state" value="<?php echo $state?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="city">District</label>
															<input type="text" class="form-control" name="district"
																id="district" placeholder="district" value="<?php echo $district?>">
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="pc">Pincode</label>
															<input type="number" class="form-control" name="pc"
																id="pc" placeholder="Pincode" value="<?php echo $pin?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="age">age</label>
															<input type="number" class="form-control" name="age"
																id="age" placeholder="age" value="<?php echo $age?>">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="gender">gender</label>
															<input type="text" class="form-control" name="gender"
																id="gender" placeholder="gender" value="<?php echo $gender?>">
														</div>
													</div>


													



													<input type="text" class="form-control" style="display:none;" name="uname"
																id="hide" placeholder="Name" value="<?php echo $uname?>">
																<button class="btn btn-outline-light btn-lg" style="background-color:green;" type="submit">
																update
															</button>
												</div>
											</form>

											<br>

											<h3 class="mb-4" style="color: #01d28e;">Medical Information</h3>

											<form action="medupdate.php" method="POST" id="contactForm" name="contactForm" class="contactForm">
												<div class="row">
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="bgroup">Blood Group</label>
															<select name="bg" id="bgroup" value="<?php echo $bloodgroup?>">
																<option value="A+">A+</option>
																<option value="A-">A-</option>
																<option value="B+">B+</option>
																<option value="B-">B-</option>
																<option value="AB+">AB+</option>
																<option value="AB-">AB-</option>
																<option value="O+">O+</option>
																<option value="O-">O-</option>
															</select>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="omc">Other Medical Complications</label>
															<input type="text" class="form-control" name="omc"
																id="omc" placeholder="Other Medical Complications" value="<?php echo $medical?>">
														</div>
													</div>
													
													<input type="text" class="form-control" style="display:none;" name="name"
																id="hide" placeholder="Name" value="<?php echo $uname?>">
																<button class="btn btn-outline-light btn-lg" style="background-color:green;" type="submit">
																update
																</button>
												</div>
											</form>

											<br>

											<h3 class="mb-4" style="color: #01d28e;">Emergency Contact</h3>
											<form action="update.php" method="POST" id="contactForm" name="contactForm" class="contactForm">
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="gno1">Guardian Number</label>
															<input type="tel" class="form-control" name="gno1"
																id="gno1" placeholder="Guardian1 Number" value="<?php echo $gcontact?>">
														</div>
														<div class="form-group">
															<label class="label" for="gno1">Guardian Number</label>
															<input type="tel" class="form-control" name="gno1"
																id="gno1" placeholder="Guardian1 Number" value="<?php echo $gcontact?>">
														</div>
													</div>
													<input type="text" class="form-control" style="display:none;" name="name"
																id="hide" placeholder="Name" value="<?php echo $uname?>">
													<button class="btn btn-outline-light btn-lg" style="background-color:green;" type="submit">update</button> 
												</div>
											</form>
											<!-- <img id="qr-code" src="" alt="QR Code"> -->

											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		</div>
	</section>

	<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>

	function generateQR() {
		var qrHash = "<?php echo $qr; ?>"; // Corrected variable name
		console.log("QR Hash:", qrHash); // Debugging statement
		var qrCodeElement = document.getElementById("qr-code"); // Ensure this ID matches the ID of the element where you want the QR code to appear

		if (qrHash) {
			// Clear previous QR code
			qrCodeElement.innerHTML = "";
			// Instantiate QRCode object
			var qrCode = new QRCode(qrCodeElement, {
				text: qrHash,
				width: 128,
				height: 128,
				colorDark : "#000000",
				colorLight : "#ffffff",
				correctLevel : QRCode.CorrectLevel.H
			});
			console.log("QR Code should be visible now.");
		} else {
			qrCodeElement.style.display = "none";
			console.log("No QR Hash available.");
		}
	}


    // Call generateQR on page load
    	window.onload = generateQR;

		function check(){
			const url=new URL(window.location.href);
			var x= document.getElementById("userd");
			var y= document.getElementById("login");
			var n= url.searchParams.get('name');
			if(url.searchParams.has('name')){
				x.style.display="block";
				y.style.display="none";
				x.innerHTML=n;
			}    
		}
		function update(){
			const url=new URL(window.location.href);
    		var e= url.searchParams.get('status');
			var n= url.searchParams.get('name');
    		if(url.searchParams.has('status')){
        		alert(e);
        		window.location.href="http://localhost/fproject/display.php?name="+n;
    		}
		}
	</script>
	<script>
    var qrHash = <?php echo json_encode($qr); ?>;
	console.log("QR Hash for the user: " + qrHash);
	</script>
    <script src="QR/js/jquery.min.js"></script>
	<script src="QR/js/popper.js"></script>
	<script src="QR/js/bootstrap.min.js"></script>
	<script src="QRjs/jquery.validate.min.js"></script>
	<script src="QR/js/main.js"></script>

</body>
</html>