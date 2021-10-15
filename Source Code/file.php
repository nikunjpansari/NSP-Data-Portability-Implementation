<?php
error_reporting(0);
$myfile = fopen($_POST["fname"].$_POST["dob"].".xml", "w") or die("Unable to open file!");
fwrite($myfile, "National Scholarship Portal 2.0\n\n");
fwrite($myfile, "Registration Details\n\n");
fwrite($myfile, "First Name:".$_POST["fname"]."\n");
fwrite($myfile, "Middle Name:".$_POST["mname"]."\n");
fwrite($myfile, "Last Name:".$_POST["lname"]."\n");
fwrite($myfile, "Email Id:".$_POST["email"]."\n");
fwrite($myfile, "Date of Birth:".$_POST["dob"]."\n\n\n");
fwrite($myfile, "Academic Details\n\n");
fwrite($myfile, "College/University Name:".$_POST["clg"]."\n");
fwrite($myfile, "Address:".$_POST["clgadd"]."\n");
fwrite($myfile, "Degree Enrolled:".$_POST["degree"]."\n");
fwrite($myfile, "Enrollment Year:".$_POST["enr"]."\n");
fwrite($myfile, "Graduation Year:".$_POST["grad"]."\n\n\n");
fwrite($myfile, "Basic Details\n\n");
fwrite($myfile, "Guardian/Father Name:".$_POST["g_f_name"]."\n");
fwrite($myfile, "Guardian/Father Qualification:".$_POST["g_f_qual"]."\n");
fwrite($myfile, "Mobile Number:".$_POST["mobile"]."\n");
fwrite($myfile, "Family Annual Income:".$_POST["inc"]."\n");

fclose($myfile);	
echo $_POST["fname"].$_POST["dob"].".xml file created succcessfully in the root folder";
?>
