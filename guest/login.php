<? top('Вход') ?>

<h1>Вход</h1>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<script src="/script.js"></script>

<p><input type="text" placeholder="E-mail" id="email"></p>
<p><input type="password" placeholder="Пароль" id="password"></p>
<p><input type="text" placeholder="<?captcha_show()?>" id="captcha"></p>
<p><button onclick="post_query('gform', 'login', 'email.password.captcha')">Войти</button> <button onclick="go('recovery')">Восстановить пароль</button></p>

<? bottom() ?>