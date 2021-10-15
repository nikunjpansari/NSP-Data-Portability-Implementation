<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<title>NSP 2.0</title>
<style>


.btn {
	margin-left: 28%;
}


.error {color: #FF0000;}
</style>
</head>
<body bgcolor="#00FFFF">


<div class="container">

<div class="card">
<div class="card-header"> 
<H1><center><U><I>National Scholarship Portal 2.0</I></U></center></H1>
</div>
<div class="card-body"> 


<form name="form" action="file.php" method="POST">
<div class="card">
<H2><center><U>Registration Details</U></center></H2>

<table align="center">
<tr>
	<td><label for="exampleInputEmail1">First name</label><span class="error">*</span>
	<td><input type="text" name="fname" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Middle Name:</label><span class="error">*</span>
	<td><input type="text" name="mname" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Last Name:</label><span class="error">*</span>
	<td><input type="text" name="lname" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Email Id:</label><span class="error">*</span>
	<td><input type="email" name="email" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Date of Birth:</label><span class="error">*</span>
	<td><input type="Date" name="dob" class="form-control" ></td>
</tr>

</table>
</div>
<div class="card">
<H2><center><U>Academic Details</U></center></H2>
<table align="center">


<tr>
	<td><label for="exampleInputEmail1">College:</label><span class="error">*</span>
	<td><input type="text" name="clg" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Address:</label><span class="error">*</span>
	<td><input type="optional" name="clgadd" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Degree Enrolled:</label><span class="error">*</span>
	<td><input type="text" name="degree" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Enrollment Year:</label><span class="error">*</span>
	<td><input type="Year" name="enr" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Graduation Year:</label><span class="error">*</span>
	<td><input type="Year" name="grad" class="form-control" ></td>
</tr>

</table align="center">
</div>
<div class="card">
<H2><center><U>Basic Details</U></center></H2>
<table align="center">



<tr>
	<td><label for="exampleInputEmail1">Parents:</label><span class="error">*</span>
	<td><input type="text" name="g_f_name" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Parents Qualification:</label><span class="error">*</span>
	<td><input type="optional" name="g_f_qual" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Mobile:</label><span class="error">*</span>
	<td><input type="Number(10)" name="mobile" class="form-control" ></td>
</tr>
<tr>
	<td><label for="exampleInputEmail1">Income:</label><span class="error">*</span>
	<td><input type="text" name="inc" class="form-control" ></td>
</tr>
</table>
</div>
<br>
<div>
<button class="btn btn-primary" type="reset" name="Reset">Reset</button>
<button class="btn btn-primary"  name="submit" type="submit" value="Submit" bg-color: "#008CBA";>Submit</button>
</form>
</div>


</div>
 
 </div>
 </div>


 
</body>
</html>
