<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us</title>
		<?php include'style.php'; ?>
		<?php include'link.php'; ?>
	</head>
	<body>
		<div class="container-fluid main">

			<div class="container cntct_style" id="cntct">
				<div class="cnt_style">
					<div class="servi_ces text-center mb-5 mt-4">
						<h1 class="text-center brnd_style text-white"> Contact Us For More Details</h1>
					</div>
					<div class="container form_style">
						<div class="row">
							<div class="contact_img d-flex justify-content-center align-items-center col-lg-5 col-12">

								<img src="images/cntctus.png" class="img-fluid"><br>
								
							</div>
							<div class="col-lg-7 col-12 form_animt p-5">
								<form action="display.php" method="POST" enctype="multipart/form-data" 
								onsubmit="return validation()">
									<div class="form-group">
										<label class="all_fonts">Title:</label>
														<select name="ntitle">
									<option value="Mr">Mr</option>
									<option value="Mrs">Mrs</option>
									<option value="Ms">Ms</option>
								</select>
									</div>
									<div class="form-group">
										<label class="all_fonts">First Name:</label><span></span>
										<input type="text" class="form-control" name="fname" id="fsname" placeholder="Enter your First Name" autocomplete="off" required>
										<span id="fnameerr" class="text-danger font-weight-bold"></span>
									</div>

									<div class="form-group">
										<label class="all_fonts">Last Name:</label><span></span>
										<input type="text" class="form-control" name="lname" id="lsname" placeholder="Enter your Last Name" autocomplete="off" required>
										<span id="lnameerr" class="text-danger font-weight-bold"></span>
									</div>

									<div class="form-group">
										<label class="all_fonts">Date Of Birth:</label><span></span>
										<input type="date" class="form-control" name="dob" id="bdate" placeholder="Select your DOB" autocomplete="off" required>
										<span id="doberr" class="text-danger font-weight-bold"></span>
									</div>

									<div class="form-group">
										<label class="all_fonts">Mobile Number:</label>
										<input type="number" class="form-control" name="mobile" id="phone" placeholder="mobile no." autocomplete="off" required>
										<span id="moberr" class="text-danger font-weight-bold"></span>
									</div>

									<div class="form-group">
										<label class="all_fonts">File Upload:</label>
										<input type="file" accept=".pdf, .jpg, .jpeg, .png" class="form-control" name="docs" id="flname" placeholder="Only PDF, Image formats" autocomplete="off" required>
										<span id="fileerr"></span>
									</div>
									
									<div class="form-group">
										<label class="all_fonts">Email-id:</label>
										<input type="email" class="form-control" name="mail" id="mails" placeholder="name@mail.com" autocomplete="off" required>
										<span id="mailerr" class="text-danger font-weight-bold"></span>
									</div>

									<div class="form-group">
										<label class="all_fonts" for="exampleFormControlTextarea1">Message:</label>
										<textarea class="form-control comment" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>
									<button type="submit" class="button text-white" name="submit">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
		    function validation(){
		    	var fsname = document.getElementById('fsname').value;
		    	var lsname = document.getElementById('lsname').value;
		    	var phone = document.getElementById('phone').value;
		    	var mails = document.getElementById('mails').value;

		    	var fnamecheck = /^[A-Za-z]{2,15}$/ ;
		    	var lnamecheck = /^[A-Za-z]{3,15}$/ ;
		    	var mobcheck = /[0-9]{10}$/ ;
		    	var mailcheck = /^[a-z]{3,}@[A-Za-z.]{2,}[.]{1}[a-z]{2,}$/ ;
                

                if(fnamecheck.test(fsname)){
                	document.getElementById('fnameerr').innerHTML = " ";
                }else{
                	document.getElementById('fnameerr').innerHTML = "**First Name Invalid  ";
                	return false;
                }

                if(lnamecheck.test(lsname)){
                	document.getElementById('lnameerr').innerHTML = " ";
                }else{
                	document.getElementById('lnameerr').innerHTML = "**Last Name Invalid  ";
                	return false;
                }

                if(mobcheck.test(phone)){
                	document.getElementById('moberr').innerHTML = " ";
                }else{
                	document.getElementById('moberr').innerHTML = "**Inavalid Mobile Number  ";
                	return false;
                }

                if(mailcheck.test(mails)){
                	document.getElementById('mailerr').innerHTML = " ";
                }else{
                	document.getElementById('mailerr').innerHTML = "**Inavalid E-mail  ";
                	return false;
                }

		    }	
		</script>


	</body>
</html>