



<?php
include("control.php");
?>
<html>
<head>
    <title>Form registration</title>
</head>
<body>

<h1>Registration form</h1>

<form action="" method="post">
<table>



<tr>
<td><lable for="name">NAME:- </lable></td> 
<td><select name="title">
    <option value="mr">MR</option>
    <option value="mr.s">MR.S</option>
    
</select>
    
<input type="text" name="name" placeholder="enter name"></td>

<td><?php echo $nameError; ?></td>

<tr>
<td><lable for="fathername">FATHER NAME:- </lable></td>   
<td><input type="text" name="fathername" placeholder="enter name"></td>
<td><?php echo $fathernameError; ?></td>
</tr>

<tr>
<td><lable for="mothername">MOTHER NAME:- </lable></td>   
<td><input type="text" name="mothername" placeholder="enter name"></td>
<td><?php echo $mothernameError; ?></td>
</tr>

<tr>
<td><lable for="dob">DOB:- </lable></td>   
<td><input type="date" name="dob" ></td>
<td><?php echo $DOBError; ?></td>

</tr>

<tr>
<td><lable for="gender">GENDER:- </lable></td>   
<td><input type="radio" name="gender" value="male" >MALE
<input type="radio" name="gender" value="female">FEMALE</td>
<td><?php echo $genderError; ?></td>
</tr>


<tr>
<td><lable for="education">EDUCATION:- </lable></td>   
<td><input type="checkbox" name="ssc" >SSC
<input type="checkbox" name="hsc" >HSC
<input type="checkbox" name="bsc" >BSC
<input type="checkbox" name="msc" >MSC</td>
<td><?php echo $educationError; ?></td>
</tr>



<tr>
<td><lable for="email">EMAIL:- </lable></td>   
<td><input type="text" name="email" placeholder="enter email"></td>
</tr>


<tr>
<td><lable for="mobile">MOBILE NUMBER:- </lable></td>   
<td><input type="text" name="mobile" placeholder="enter number"></td>
</tr>

<tr>
<td><lable for="address">ADDRESS:- </lable></td>   
<td><input type="text"  rows="5" cols="30" placeholder="enter your address"></td>
</tr> 
<tr>
<td><lable for="mobile">NID:- </lable></td>   
<td><input type="text" name="mobile" placeholder="enter number"></td>
</tr>

<td><label for="uname">USERNAME : -</label></td>
<td><input type="text" name="username" placeholder="enter username"></td>
<td><?php echo $usernameError; ?></td>

</tr>
<tr>
<br><br>
<td><label for="pass">PASSWORD :-</label></td>
<td><input type="Password"  name="password" placeholder="enter passwordS" ></td>
<td><?php echo $passError; ?></td>
</tr>
<!--<tr>
<td><lable for="state">STATE:- </lable></td>   
<td><input type="text" name="state" placeholder="enter state name"></td>
</tr>

<tr>
<td><lable for="city">CITY:- </lable></td>   
<td><input type="text" name="city" placeholder="enter city name"></td>
</tr>
-->

<tr>
<td><td><input type="submit" name="submit"></td></td>
</tr>



</table>
</form>
</body>
</html>
