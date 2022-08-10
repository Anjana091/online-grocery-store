//$con=mysqli_connect("localhost", "root", "", "bgs");

//remote database connection 

$host='remotemysql.com';
$db='C5JW6fOuq6';
$user='C5JW6fOuq6';
$pass='gUwo8hxtbh';



$con=mysqli_connect("$host", "$user", "$pass", "$db");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
