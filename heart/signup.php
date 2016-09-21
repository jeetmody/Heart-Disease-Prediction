<?php
include 'main.php';
if(isset($_POST['criminal_name']))
{

	$criminal_name=$_POST['criminal_name'];
	$criminal_age=$_POST['criminal_age'];
	$gender=$_POST['criminal_gender'];
	$height=$_POST['criminal_height'];
	$phone=$_POST['criminal_phone'];
	$ssn=$_POST['criminal_ssn'];
	$custody=$_POST['criminal_custody'];
	$address=$_POST['address'];
	$crime_loc=$_POST['crime_loc'];
	$description=$_POST['description'];
	$officer_name=$_POST['officer_name'];
	$station_id=$_POST['station_id'];
	$da=$_POST['date'];
	$c=0;

	$sel_off_id="SELECT `officer_id` FROM `officer` WHERE `officer_name`='$officer_name' AND `station_id`='$station_id'";
	
	$ins_query="INSERT into `criminal`(age,gender,height,phone,address,ssn,criminal_name,in_custody) values ('$criminal_age','$gender','$height','$phone','$address','$ssn','$criminal_name','$custody')";
	
	$sel_criminal_id="SELECT `criminal_id` FROM `criminal` WHERE `criminal_name`='$criminal_name' AND `ssn`='$ssn'";
	
	
	
	
	$query_run = mysql_query($sel_off_id);
	if(mysql_num_rows($query_run)!=0){
		
		$row=mysql_fetch_assoc($query_run);
		$c=$row['officer_id'];
	}
	else{
		echo(mysql_error());
		die();
	}
	
	if($c!=0){
	$ins_crime_query="INSERT into `crime`(location,description,officer_id,dat) values ('$crime_loc','$description','$c','$da')";
	}
	else{
		echo "Improper officer Id selected";
	}
	
	if(mysql_query($ins_crime_query)){
		
	}
	else{
		echo(mysql_error());
	}
	
	if(mysql_query($ins_query)){
		
	}
	else{
		echo(mysql_error());
	}

	$sel_crime_id="SELECT `crime_id` FROM `crime` WHERE `location`='$crime_loc' AND `dat`='$da' AND `officer_id`='$c'";
	$query_run = mysql_query($sel_crime_id);
	$count=mysql_num_rows($query_run);
	if($count!=0){
		
		$row=mysql_fetch_assoc($query_run);
		$d=$row['crime_id'];
	}
	else{
		echo(mysql_error());
		die();
	}


	$query_run = mysql_query($sel_criminal_id);
	if(mysql_num_rows($query_run)!=0){
		
		$row=mysql_fetch_assoc($query_run);
		$e=$row['criminal_id'];
	}
	else{
		echo(mysql_error());
		die();
	}

	if($d!=0){
	$ins_involved_query="INSERT into `involved`(criminal_id,crime_id) values ('$e','$d')";
	}
	else{
		echo "Improper crime Id selected";
	}

	if(mysql_query($ins_involved_query)){
		
	}
	else{
		echo(mysql_error());
	}

	$sel_involved_id="SELECT `involved_id` FROM `involved` WHERE `crime_id`='$d' AND `criminal_id`='$e'";
	
	$query_run = mysql_query($sel_involved_id);
	if(mysql_num_rows($query_run)!=0){
		$row=mysql_fetch_assoc($query_run);
		$f=$row['involved_id'];
	}
	else{
		echo(mysql_error());
		die();
	}

	$up_crime="UPDATE `crime` SET `involved_id`='$f' WHERE `crime_id`='$d'";
	$up_criminal="UPDATE `criminal` SET `involved_id`='$f' WHERE `criminal_id`='$e'";

	if(mysql_query($up_crime)){
	}
	else{
		echo(mysql_error());
	}


	if(mysql_query($up_criminal)){
	}
	else{
		echo(mysql_error());
	}
}

?>
<html>
<head>
	<title>Insert Data</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	*{
		
		padding: 5px; 
	}
	</style>
</head>
<body>
<div class="container">
 <div class="row">
  		<div class="col-lg-4"></div>
	  		<div class="form-group col-lg-8">
				<h2>Crime and Criminal Details</h2>
			</div>
  </div>
<form action="<?php echo($_SERVER['PHP_SELF'])?>" method="post" >
  <div class="row">
  		<div class="col-lg-2"></div>
	  <div class="form-group col-lg-4">
	    <label>Name</label>
	    <input type="text" class="form-control" name="criminal_name" id="criminal_name" placeholder="Enter Name">
	  </div>
	  <div class="form-group col-lg-4">
	    <label>Age</label>
	    <input type="text" class="form-control" name="criminal_age" id="criminal_age" placeholder="Enter Age">
	  </div>
  </div>
  <div class="row">
	  <div class="col-lg-2"></div>
	  <div class="col-lg-4">
	  <label>Gender</label>
	  <div class="radio">
	  <label>
	    <input type="radio" name="criminal_gender" id="criminal_gender" value="male" checked>
	    Male
	  </label>
	  </div>
	  <div class="radio">
	  <label>
	    <input type="radio" name="criminal_gender" id="criminal_gender" value="female">
	    Female
	  </label>
	  </div>
	  </div>
  </div>
  <div class="row">
  <div class="col-lg-2"></div>
  <div class="form-group col-lg-4">
    <label>Height</label>
    <input type="text" class="form-control" name="criminal_height" id="criminal_height" placeholder="Enter Height">
  </div>
  </div>
  <div class="row">
  <div class="col-lg-2"></div>
  <div class="form-group col-lg-4">
    <label>Contact No.</label>
    <input type="text" class="form-control" name="criminal_phone" id="criminal_phone" placeholder="Enter Contact No.">
  </div>
  <div class="form-group col-lg-4">
    <label>SSN</label>
    <input type="text" class="form-control" name="criminal_ssn" id="criminal_ssn" placeholder="Enter SSN No.">
  </div>
  </div>
  <div class="row">
	  <div class="col-lg-2"></div>
	  <div class="col-lg-4">
		  <label>Custody Information</label>
		  <div class="radio">
		  <label>
		    <input type="radio" name="criminal_custody" id="criminal_custody" value="yes" checked>
		    In Custody
		  </label>
		  </div>
		  <div class="radio">
		  <label>
		    <input type="radio" name="criminal_custody" id="criminal_custody" value="no">
		    Not in custody
		  </label>
		  </div>
		</div>
	</div>

  <div class="row">
  <div class="col-lg-2"></div>
	  <div class="col-lg-8">
		  <label>Address</label>
		  <textarea class="form-control" rows="3" name="address" id="address"></textarea>
		  <h3>Crime Details</h3>
	  </div>
  </div>
  <div class="row">
  <div class="col-lg-2"></div>
  <div class="form-group col-lg-4">
    <label>Date</label>
    <input type="date" class="form-control" value="date" name="date">
  </div>
  </div>
  <div class="row">
  <div class="col-lg-2"></div>
  <div class="form-group col-lg-4">
    <label>Location</label>
    <input type="text" class="form-control" name="crime_loc" id="crime_loc" placeholder="Enter Location">
  </div>
  </div>
  <div class="row">
  <div class="col-lg-2"></div>
	  <div class="col-lg-8">
		  <label>Crime Description</label>
		  <textarea class="form-control" rows="3" name="description" id="description"></textarea>
	   </div>
   </div>
   <div class="row">
   <div class="col-lg-2"></div>
  <div class="form-group col-lg-4">
    <label>Officer Name</label>
    <input type="text" class="form-control" name="officer_name" id="officer_name" placeholder="Enter Officer Name">
  </div>
   <div class="form-group col-lg-4">
    <label>Station Id</label>
    <input type="text" class="form-control" name="station_id" id="station_id" placeholder="Enter Station Id">
  </div>
  </div>
 	<div class="row">
      <div class="col-lg-2"></div>
        <div class="form-group col-lg-4">
	       <button type="submit" class="btn btn-default">Submit</button>
	     </div>
	   </div>

</form>
</div>
</body>
</html>