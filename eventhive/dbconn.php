<?php 
$db =mysqli_connect('localhost' ,'root', '','events') or die(mysql_error());
if(isset($_POST))
{
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$phone_number=trim($_POST['phone_number']);
}

    if (($name=="")||($email=="")||($phone_number==""))
        {
        echo "All fields are required, please fill the form again.";
        }

        else{
$insert = "INSERT INTO `events`.`organizers` (`id`, `email`, `phonenumber`) VALUES ('$name', '$email', '$phone_number');";

if(mysqli_query($db,$insert))
{
	echo "You have registered successfully";
}
else
{
	echo "Registration was not successful";
}
}