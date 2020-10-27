<?php
$gender="";
$err_gender="";
$hobbies="";
$err_profession="";
$name="";
$err_name="";


?>
<html>
<head>
<title>Club Member Registration</title>
</head>
<body>
<hr>
<form action="" method="post">
<fieldset>
<legend>Club Member Registration</legend>
<table>
<tr>
<td>Name:</td>
<td><input type="text" name=""></td>
</tr>
<tr>
<td>Username:</td>
<td><input type="text"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type=" Confirm Password" name="Confirm password"></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text"></td>
</tr>
<tr>
<td>Address: </td>
<td><input type="text" value="street address">
</td>
</tr>
<tr>
<td align="right">Birth Date:</td>
<td> <select>>
<option selected disabled>Day</option> 
<?php 
for ($i-1;$i<-31;$i++){
	echo "<option>",$i, "<option>";
}
?>
</select>
<select>
<option>Month </option>
</select>
<select>
<option>Year</option>
</select>
</td></tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
</td>
</tr>
