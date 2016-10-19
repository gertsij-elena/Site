<div class="form_input">
    <form action="actions/login.php" method="POST" id="login_form">
	     Ваше имя:<input type="text" name="myname" value="" required/></br>
		 Пароль:<input type="text" name="mypassword" value="не менее 6 символов" required/></br>
		 <input type="submit" value="Войти"/>
    </form>
	<!--<button><a href="elements/form_register.php" target="_parent">Зарегистрироваться</a></button>-->
	<button>Зарегистрироваться</button>
	<div id="result"></div>
	<script>
	$("#loginForm").submit(function(event) {
    // Предотвращаем обычную отправку формы
    event.preventDefault();
    $.post('login.php', $("#loginForm").serialize(),
            function(data) {
                    $('#result').html(data);
            });
    });
	</script>
</div>