<?php
    session_start();
    require('connect.php'); 
    $email = $_SESSION['email'];

 
    // $_SESSION['email'] = $email;
	$sql = "SELECT * FROM police_reg WHERE email = '$email'"; 
    
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

	
        $fname = $row['fname'];
        $lname = $row['lname'];
        $gender = $row['gender'];
        $email = $row['email'];   
        $dob = $row['dob'];
        $mobile_no = $row['mobile_no'];
        $hn = $row['hn'];
        $pcode = $row['pcode'];
        $state = $row['state'];
        $district = $row['district'];
        $city = $row['city'];
        $experience= $row['experience'];
		$designation= $row['designation'];
		$station= $row['station'];
        $pid = $row['pid'];
       
}
    
 ?>

<?php
require('header.php');
?>



<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>blank</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">blank</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

              



            
<!-- 
            Default Basic Forms Start
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Default Basic Forms</h4>
							<p class="mb-30">All bootstrap element classies</p>
						</div>
						<div class="pull-right">
							<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Text</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Johnny Brown">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Search</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Search Here" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="bootstrap@example.com" type="email">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">URL</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="https://getbootstrap.com" type="url">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="1-(111)-111-1111" type="tel">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="password" type="password">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Number</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="100" type="number">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" placeholder="Select Date" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Month</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control month-picker" placeholder="Select Month" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Time</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control time-picker" placeholder="Select time" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Select</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12">
									<option selected="">Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
						</div>
					</form>
								-->			
<form>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Text</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" placeholder="Johnny Brown">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Search</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" placeholder="Search Here" type="search">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Email</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="bootstrap@example.com" type="email">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">URL</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="https://getbootstrap.com" type="url">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="1-(111)-111-1111" type="tel">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Password</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="password" type="password">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Number</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="100" type="number">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Date</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control date-picker" placeholder="Select Date" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Month</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control month-picker" placeholder="Select Month" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Time</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control time-picker" placeholder="Select time" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Select</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12">
				<option selected="">Choose...</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
			</select>
		</div>
	</div>
	
</form>   

//demo form
















<form action="update_prof.php" method="post">
<span>
			<label>First Name</label>
			<input name="fname" type="text" placeholder="First Name" value="<?php echo $fname;?>" required="">
		</span>
		<span>
			<label>Last Name</label>
			
			<input name="lname" type="text" placeholder="Last Name" value="<?php echo $lname;?>" required="">
		</span>
		
		<span>
			<label>Gender</label>
			<input name="gender" type="text" placeholder="Gender" value="<?php echo $gender;?>" required="">
		</span>
		<span>
			<label>Email</label>
			<input name="email" type="email" placeholder="Your Email" value="<?php echo $email;?>" required="">
		</span>
		<span>
			<label>DOB</label>
			<input name="dob" type="text" placeholder="Date of Birth" value="<?php echo $dob;?>" required="">
		</span>
		<span>
			<label>Mobile</label>
			<input name="mobile_no" type="text" placeholder="Mobile Number" value="<?php echo $mobile_no;?>" required="">
		</span>

		<span>
			<label>Houseno</label>
			<input name="hn" type="text" placeholder="houseno" value="<?php echo $hn;?>" required="">
		</span>
		<span>
			<label>Pincode</label>
			<input name="pcode" type="text" placeholder="Your pin" value="<?php echo $pcode;?>" required="">
		</span>
		<span>
			<label>State</label>
			<input name="state" type="text" placeholder="Your State" value="<?php echo $state;?>" required="">
		</span>
		<span>
			<label>District</label>
			<input name="district" type="text" placeholder="Your District" value="<?php echo $district;?>" required="">
		</span>
		<span>
			<label>City</label>
			<input name="city" type="text" placeholder="Your City" value="<?php echo $city;?>" required="">
		</span>
		
	   
		<span>
			<label>Experience</label>
			<input name="experience" type="text" placeholder="Your Experience" value="<?php echo $experience;?>" required="">
		</span>
		<span>
			<label>Designation</label>
			<input name="designation" type="text" placeholder="Your Designation" value="<?php echo $designation;?>" required="">
		</span>
		<span>
			<label>Station Name</label>
			<input name="station" type="text" placeholder="Station" value="<?php echo $station;?>" required="">
		</span>
	   
		<span>
			<label>Police ID</label>
			<input name="pid" type="text" placeholder="Police ID" value="<?php echo $pid;?>" required="">
		</span>
		
									
									
									
									<div class="w3_agileits_submit">
										<input name="psubmit" type="submit" value="submit">
										<input type="reset" value="reset">
									</div>
								</form>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms End -->



            </div>
        </div>

        <?php
require('footer.php');
?>