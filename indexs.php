<?php
echo "".$cook;
    $result = 0;
    if($_POST['login'] !='')
    {
	$mysqli = new mysqli("localhost","root","","data");
        $result = $mysqli->query("SELECT * FROM users WHERE login='".$_POST['login']."'");
    }
    
    if($result == 0 || $result->num_rows == 0)
    {
	echo "$.cookie('login', '');\n";
	echo "$.cookie('password','');\n";
    }
    else
    {
	echo "$.cookie('login', '".$_POST['login']."');\n";
	echo "$.cookie('password','".$_POST['password']."');\n";
    }
?>