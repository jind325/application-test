<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>user info recoder</title> 
	<script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <?php
        $people = array(array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
        array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com'));
        ?>
</head>
<body>
	<?php
	$i=0;
	$name;
	$email;
	while ($i>=0 && $i<=4){
	    $i++;
	    $name=$people[$i]['first_name']." ".$people[$i]['last_name'];
	    $email=$people[$i]['email'];
        echo "<button onclick="."'"."myFun("."\"".$name."\"".","."\""." and ".$email."\"".")'>"."Person: ".$i."</button>"."Id: ".$people[$i]['id']." First_Name: ".$people[$i]['first_name']." Last_Name: ".$people[$i]['last_name']." Email: ".$people[$i]['email']; 
        echo "</br>";
        }
 	?> 
 	<script>
 	function myFun(Name, Email){
 	 	alert("the name and email of this people is: "+ Name + Email);
 	}
 	</script>
</body>
</html>
