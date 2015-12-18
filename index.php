<!DOCTYPE html>
<html>
<head>
<title>Філософія життя та творчість Леонарда да Вінчі</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1251" />
<script type="text/javascript" src="/js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script language="javascript">
    function funcBefore()
    {
       // alert("funcBefore");
    }
    function funcSuccess(data)
    {
       // alert(data);
    }
    $(document).ready(function(){

	login =  $.cookie('login');
	password = $.cookie('password');	

	if(login === '' || password === '') {
		$('#unreg').hide();
		$('#reg').show();
		login = '';
	        password = '';
		$('#adm').hide();
	}
	else {
	         $('#reg').hide();
		 $('#unreg').show();
		 $('#login2').text(login);
		 if(login === 'admin')
		     $('#adm').show();
		 else
		 	$('#adm').hide();
	}
	$('#autor').bind('click',clickHandler);
	$('#autor2').bind('click',unclickHandler);
	
	$("#portret").fadeOut(300);
	$("#portret").fadeIn(5000);
	
	$("#logo").fadeOut(300);
	$("#logo").fadeIn(5000);	
	});

	function clickHandler(eventObj) {
	   // alert("clickHandler");
	    $.ajax({
	    url:"indexs.php",
	    type:"POST",
	    data: ({login:$('#log').val(), password:$('#pass').val()}),
	    dataType:"html",
	    beforeSend:funcBefore,
	    success:funcSuccess
	    });
	    //alert("2 clickHandler");
	    login = $('#log').val();
	    password = $('#pass').val();
	    if(login != '' || password != '')
		{
	            $('#reg').hide(5000);
		    $('#unreg').show(5000);
		    if(login === 'admin')
		        $('#adm').show();
		    else
		 	$('#adm').hide();
			
		    $.cookie('login', login);
		    $.cookie('password', password);
		    $('#login2').text(login);
		}
		return false;
	}

	function unclickHandler(eventObj) {
		$('#reg').show(5000);
	        $('#unreg').hide(5000);
		$('#adm').hide();
		
		login = $.cookie('login');
		$('#login2').text(login);
		$.cookie('login', '');
		$.cookie('password', '');
		return false;
	}
</script>
</head>
<body  background="back.svg">
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
<table width="100%" height="100%" cellpadding="5" cellspacing="0" border="0">
   <!--<h1>Філософія життя та творчість Леонардо да Вінчі</h1> -->
   <tr>
   <td rowspan="3" width="25%"></td>
   <header><td colspan="6" height="15%"><div id="logo"><img src="logo.png" height="100%" width="100%" ></div></td></header>
   <td  width="25%"> 
   <br><br>		
							<select name="Language" size = 4>
							<optgroup label="Language">
							<option value="cnt_1" selected>English
							<option value="cnt_2">Українська
							<option value="cnt_3">Русский							
							</optgroup ></select><br>
							
   </td>
   </tr>
   <tr>
   <nav>
    <th height="5%"><a  href="index.php"><font size="5" color="#8B0000">Головна</font></a></th>
    <th><a href="biography.html"><font size="5" color="#8B0000">Біографія</font></a></th>
    <th><a href="picture.html"><font size="5" color="#8B0000">Картини</font></a></th>
    <th><a href="science.html"><font size="5" color="#8B0000">Винаходи</font></a></th>
	<th><a href="quotes.html"><font size="5" color="#8B0000">Цитати</font></a></th>
	<th><a href="reviews.php"><font size="5" color="#8B0000">Відгуки</font></a></th> 
  
	</nav>
	<th colspan="2" rowspan="2" align="left" valign="top">
	    <div id="reg">
		                  <form method="post" align="center">
		                  <center>					
							<h3>Авторизація</h3>
                          </center>
							<label for="login">Логін:    </label><input type="text" required id="log" name="log_name"><br><br>
							<label for="password">Пароль:</label><input type="password" required id="pass" name="password_name">
							<br><br>
							<button type="submit"><a href="reg.php">Реєстрація</a></button>
							<button type="submit" id="autor">Авторизація</button>
						</form>
        </div>
	    <div id="unreg">
		                  <form method="post" align="center">
		                  <center>					
							<h3>Користувач</h3>
                          </center>
							<label for="login">Логін:    </label><label for="login" id ="login2"></label><br><br>
							<br><br>
							<button type="submit" id="autor2">Вихід</button>
							<div id="adm"><br>
							<button type="submit" id="autor3"><a href="admin.php">Блокування</a></button>
							</div>
						</form>
        </div>			
	</th>
   </tr>
   <tr>
  <td colspan="2" width="20%" align="start"> <div id="portret"> <img src="portret.jpg"  ></div>
   </td>
   <section>
   <article>
  <td colspan="4" width="30%"><div><p align="center"><font size="5"> Філософія життя та творчість </p><p align="center">Леонарда да Вінчі</font></p> 
   <p align="right" align="start"><font size="4"><i>«Як добре прожитий день дає спокійний сон, так з користю прожите життя дає спокійну смерть»</i></font></p>
  
  <p align="justify"><font size="4">Леонардо да Вінчі (15 квітня 1452 рік – 2 травня 1519 рік) – відомий італійський 
   архітектор епохи Відродження, був також музикантом, винахідником, інженером, скульптором і геніальним художником.
   Він був описан як архетип «людини епохи Відродження» і універсального генія. Леонардо широко відомий
   своїми унікальными картинами, такими як, Мона Ліза і Тайна вечеря.Він також відомий за свої 
   чисельні винаходи. До того ж, він допоміг у розвитку анатомії, астрономії та градобудівництва.
   </div></font></p>  
   </article>
    </section>
   </td>
   </tr>
  </table>
  
  <footer>
  <p align="center">Posted by: Elvira R</p>
  <p align="center">Contact information: <a href="mailto:someone@gmail.com">
  someone@gmail.com</a>.</p>
</footer>
							<br><br>							<br><br>							<br><br>
</body>
</html>