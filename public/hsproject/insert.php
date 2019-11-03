<html>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<?php

$host='localhost';
$user='id627272_dmb1107';
$password='2x3rTB32';
$database='id627272_leaderboards';

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
echo 'Connected to MySQL';


$name=($_POST['name']);
$score=($_POST['score']);

mysqli_query($con, "INSERT INTO scores (id, name, score) VALUES (NULL, '$name', '$score')");


mysqli_close ($con);

?>
</body>
</html>
