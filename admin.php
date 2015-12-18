<?php
    header("Content-Type: text/html; charset=cp1251");
?>
<!DOCTYPE html>
<html>
<head>
<title>Філософія життя та творчість Леонарда да Вінчі</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1251" />
<script type="text/javascript" src="/js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script language="javascript">
    $(document).ready(function(){
	var txt='<table cellpadding="5" cellspacing="0" border="1">';
    txt+='  <tr><th>&nbspЛогін&nbsp</th><th>&nbspВік&nbsp</th><th>&nbspСтать&nbsp</th><th>&nbspДата реєстрації&nbsp</th><th>&nbspЕлектронна пошта&nbsp</th><th>&nbspТелефон&nbsp</th><th>&nbspБлокувати&nbsp</th></tr>';
     <?php
	     $checkTrue = "checked";
		 $checkFalse = "";
		 $check="";
         $mysqli = new mysqli("localhost","root","","data");
	     $result = $mysqli->query("SELECT * FROM users");
	     $rows = $result->fetch_assoc();
		 do
	     {
		     if("box".$rows['id'] == "".$_POST["box".$rows['id']])
			 {
                 $mysqli->query("UPDATE users SET lock_user=b'1' WHERE id=".$rows['id']."");
			 }
             else
                 $mysqli->query("UPDATE users SET lock_user=b'0' WHERE id=".$rows['id']."");				 

	     }while($rows = $result->fetch_assoc());
		 
		 $result = $mysqli->query("SELECT * FROM users");
	     $rows = $result->fetch_assoc();
	     $count = 0;
	     do
	     {
		     if($rows['lock_user'] == b'1')
			    $check = $checkTrue;
             else
             	$check = $checkFalse;		 
	         echo "txt +='<tr><td>'+'".$rows['login'].'</td><td>'.$rows['age'].'</td><td>'.$rows['sex'].'</td><td>'.$rows['date'].'</td><td>'.$rows['email'].'</td><td>'.$rows['telephone']."';";
	         echo "        txt+='<td align=\"center\"><input type=\"checkbox\" name=\"box".$rows['id']."\" id=\"box".$rows['id']."\" ".$check." value=\"box".$rows['id']."\"/> <br></td></tr>';\n";
			 $count++;
	     }while($rows = $result->fetch_assoc());
		?>
        txt+="</table>";		
		$('#tb').html(txt);
	});
</script>
</head>
<body  background="back1.jpg">
  <style type="text/css">
   a {
    text-decoration: none; /* Убирает подчеркивание для ссылок */
   } 
   a:hover { 
    text-decoration: none; /* Добавляем подчеркивание при наведении курсора на ссылку */
	color: black;
   } 
  </style>
<link rel="stylesheet" href="styleind.css">
<table   width="100%" height="100%" cellpadding="5" cellspacing="5" border="0">
   <!--<h1>Філософія життя та творчість Леонардо да Вінчі</h1> -->
   <tr>
   <td rowspan="3" width="20%"></td>
   <td colspan="3" height="100%">
    <form method="post" action="admin.php">
	    <div id="tb"></div>
		<br>
		<button type="submit">Запам'ятати</button> <button type="submit" id="autor3"><a href="index.php">На головну</a></button>
	</form>
	</td>
   <td></td>
   </tr>
  </table>
</body>
</html>