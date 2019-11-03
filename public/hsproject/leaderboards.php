<!doctype html>
<html>
<head>
<title>Leaderboards</title>
    <script src="https://use.fontawesome.com/1f4f3a0067.js"></script>
	<link rel="stylesheet" type="text/css" href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="js/index.js"></script>
    <link rel="stylesheet" type="text/css" title="tree" href="css/tree.css">
    <link rel="alternate stylesheet" type="text/css" title="violet" href="css/violet.css">
    <link rel="alternate stylesheet" type="text/css" title="sunglow" href="css/sunglow.css">
    <link rel="alternate stylesheet" type="text/css" title="lime" href="css/lime.css">
    <link rel="alternate stylesheet" type="text/css" title="dark" href="css/dark.css">
	<script src="js/styleswitch.js" type="text/javascript"></script>
</head>

<body style="overflow:scroll;">
<body>
	<div id="wrapper">
		<div class="overlay"></div>
        
        <h1 class="siteName"><a href="index.html" class="headerlink">DaveBecker</a>.xyz</h1>
		<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a class="sidebar-label" href="http://dave-becker.com"></a>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="about.html"><i class="fa fa-fw fa-user-circle-o"></i> About</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-file-o"></i> Presentations <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Presentations</li>
                    <li><a href="projects/project1.html">Presentation 1</a></li>
                    <li><a href="projects/project2.html">Presentation 2</a></li>
                    <li><a href="projects/project3.html">Presentation 3</a></li>
                  </ul>
                </li>
                <li>
                    <a href="references"><i class="fa fa-fw fa-bookmark"></i> References</a>
                </li>
                <li>
                    <a href="snake.php"><i class="fa fa-fw fa-gamepad"></i> Snake</a>
                </li>
                <li>
                    <a href="leaderboards.php"><i class="fa fa-fw fa-globe"></i> Snake Leaderboards</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-sliders"></i> Other Layouts <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Experimental Layouts</li>
                    <li><a href="indexold.html">Layout 1</a></li>
                    <li><a href="transitions.html">Layout 2</a></li>
                    <li><a href="index2.html">Layout 3</a></li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
            <div class="container">
                <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6">
                       <table style="font-size:28px;">
<?php
header('Access-Control-Allow-Origin: *');

$host='localhost';
$user='id627272_dmb1107';
$password='2x3rTB32';
$database='id627272_leaderboards';
$tbl_name='scores';

$con = mysqli_connect($host, $user, $password, $database);

$sql="SELECT * FROM scores ORDER BY score DESC LIMIT 10";
$result = mysqli_query($con,$sql);
/*while($rows = mysqli_fetch_array($result)){
echo  "<li>" . $rows['name'] . "</li>";
}*/
$i=0;
echo "<tr>
	<td></td>
    <td style='font-weight:bold;padding-right:230px;padding-bottom:20px;font-size:34px;'>Name</td>
    <td style='font-weight:bold;padding-right:230px;padding-bottom:20px;font-size:34px;'>Score</td>
  </tr>";
   while ($row = mysqli_fetch_array($result)) {
	   $i++;
	   if($i==1){
		echo"      <tr>
	 	<td style='padding-right:30px;padding-bottom:20px;'> ".$i."st </td>
        <td style='padding-right:30px;padding-bottom:20px;'> ".$row['name']." </td>
        <td style='padding-right:30px;padding-bottom:20px;'> ".$row['score']." </td>
      </tr>";
	   }
	   else if($i==2){
		echo"      <tr>
	 	<td style='padding-right:20px;padding-bottom:20px;'> ".$i."nd </td>
        <td style='padding-right:30px;padding-bottom:20px;'> ".$row['name']." </td>
        <td style='padding-right:30px;padding-bottom:20px;'> ".$row['score']." </td>
      </tr>";
	   }
	   else if($i==3){
		echo"      <tr>
	 	<td style='padding-right:30px;padding-bottom:20px;'> ".$i."rd </td>
        <td style='padding-right:30px;padding-bottom:20px;'> ".$row['name']." </td>
        <td style='padding-right:30px;padding-bottom:20px;'> ".$row['score']." </td>
      </tr>";
	   }	   
	   else{	   
     echo"      <tr>
	 	<td style='padding-right:20px;padding-bottom:20px;'> ".$i."th </td>
        <td style='padding-right:30px;padding-bottom:20px;'> ".$row['name']." </td>
        <td style='padding-right:30px;padding-bottom:20px;'> ".$row['score']." </td>
      </tr>";
	   }
   }
?>
</table>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>
</body>
</html>