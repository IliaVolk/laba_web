
<html>
<head>
<title>Відгуки</title>
<script type="text/javascript" src="/js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script language="javascript">
	

function CreateTable(){
	     login =  $.cookie('login');
	     password = $.cookie('password');
         var txt='<table width="100%" height="90%" cellpadding="0" cellspacing="0" border="1">';
		 <?php
		     $mysqli = new mysqli("localhost","root","","data");
			 $result = $mysqli->query("SELECT * FROM comment");
			 do
	        {
			 // echo "box".$rows['id']."\n";
			 // echo "".$_POST["box".$rows['id']]."\n\n";
		     if("box".$rows['id'] == "".$_POST["box".$rows['id']])
			 {
                 $mysqli->query("DELETE FROM comment WHERE id=".$rows['id']."");
			 }				 
	         }while($rows = $result->fetch_assoc());
		 
		     if($_POST['comm'] != '')
			 {
			     $mysqli->query("INSERT INTO comment (login,date,comment, check_u) VALUES ('".$_COOKIE['login']."','".date("Y-n-j")."','".$_POST['comm']."','b0')");
			 }
             $mysqli = new mysqli("localhost","root","","data");
	         $result = $mysqli->query("SELECT * FROM comment");
	         $rows = $result->fetch_assoc();
			 $count = 0;
	         do
	         {
			     $result1 = $mysqli->query("SELECT * FROM users WHERE login='".$rows['login']."'");
				 $rows1 = $result1->fetch_assoc();
				 if($rows1['lock_user'] == b'1')
				 continue;
	             echo "txt +='<tr><td width=\"15%\">'+'".$rows['login'].'<br>'.$rows['date'].'</td><td>'.$rows['comment'].'</td>'."';";
				 if($_COOKIE['login'] == 'admin')
	                 echo "        txt+='<td width=\"15%\"><input type=\"checkbox\" name=\"box".$rows['id']."\" id=\"box".$rows['id']."\" value=\"box".$rows['id']."\"/> видалити<br></td></tr>';\n";
	             else
	   	             echo"        txt+='</tr>';\n";
				 $count++;
	         }while($rows = $result->fetch_assoc());
        ?>
	    txt+="</table>";
		 if(login == "admin")
		    txt+='<br><input type="submit" value=\"Видалити\"/><br><br>';
		else
			txt+='<br><br>';
	    $('#tb').html(txt);
		//$('#bt').bind('click',clickHandler);
		//$('#del').bind('click',delHandler);
		}

    $(document).ready(function(){
	
	CreateTable();
	});
	/*
	    function delHandler(eventObj)
		{
		    var size = arrayObj.length;
             
		    for(count = 0, pos = 0; count < size; count++, pos++)
			{
			    if($('#box'+count).is(':checked'))
				{
				    arrayObj.splice(pos, 1);
					pos--;
				}
			}
            CreateTable();
		}

		function clickHandler(eventObj) {
		
		arrayObj.push({log:login, coment:$('#tr').val(), dat:new Date()});
		CreateTable();
	    }
*/
</script>
<style>  
   td {
    padding: 5px; /* Поля в ячейках */
    vertical-align: top; /* Выравнивание по верхнему краю ячеек */
   }  
  </style>
</head>
<body bgcolor="#F3E5AB" link="#92000A" background="back1.jpg">
<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
   <td rowspan="3" width="25%"> </td>
   <td colspan="6" height="20%"><img src="logo.png" height="100%" width="100%" ></td>
   <td rowspan="3" width="25%"> </td>
   </tr>
   <tr>
    <th height="5%"><a href="index.php"><font size="5"  color="#8B0000" >Головна</font></a></th>
    <th><a href="biography.html"><font size="5" color="#8B0000">Біографія</font></th>
    <th><a href="picture.html"><font size="5" color="#8B0000">Картини</font></a></th>
    <th><a href="science.html"><font size="5" color="#8B0000">Винаходи</font></a></th>
	<th><a href="quotes.html"><font size="5" color="#8B0000">Цитати</font></a> </th>
	<th><a href="reviews.php"><font size="5" color="#8B0000">Відгуки</font></a></th> 
   </tr>
   <tr>
   <td colspan="6" width="40%" id="tb1">
       <form method="post" action="reviews.php">
	       <div id="tb"></div>
		   <textarea name="comm" cols="100%" rows="10%" id="tr"></textarea><br>
	        <br><input type="submit"><br>
	</form>
   </td>
   </tr>

  </table>
		
		


</body>
</html>