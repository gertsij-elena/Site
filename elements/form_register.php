<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
.form_register {
position:absolute;
z-index:999;
width:50%;
height:50%;
}
</style> 
</head>
<body>
<div class="form_register">
    <form action="" method="POST">
	     Имя:   <input type="text" name="myname" value="" required/></br>
		 Пароль:<input type="text" name="mypassword" value="" required/></br>
		 E-mail:<input type="text" name="myemail" value="" required/></br>
		 Телефон:<input type="text" name="myphone" value="" required/></br>
		<a href="Site/index.php"><input type="submit" value="Зарегистрироваться" id="register_button"/></a>
    </form>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/Site/actions/register.php');?>
<script>
$(function(){
	$("#register_button").bind("click",function(){
		alert("register_button_click");
	});
});
</script>
</body>
</html>