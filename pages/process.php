<?php


//Connecting the database to our code
$con= new mysqli('localhost', 'fablab', '1234', 'fabapp');

//Checking if connection has been successful
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

/*Display alert success or failure depending on user login status */
//$success_message = "Login was successful";
//$failure_message = "Login was unsuccessful, please try again";

//Get values passed from form in login.php file by using id
$username = $_POST['user'];
$password = $_POST['pass'];


// to prevent mysql injection
$username = stripcslashes ($username);
$password = stripcslashes($password);
$username = $con -> real_escape_string($username);
$password = $con -> real_escape_string($password);

//connect to the server and select database to work with
mysqli_select_db($con, 'fabapp');

//Query to get value matching user input
$result = mysqli_query($con, "select * from userss where username = '$username' and password = '$password'")
or die ("Failed to query database ".mysqli_connect_error());

$row = mysqli_fetch_array($result);


if ($row['username']==$username && $row['password'] == $password)
{
  header('Location: http://localhost/pages/notifications.php');
} else {
    header('Location: http://localhost/pages/login.php');
}

?>


