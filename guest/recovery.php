<? top('Восстановление пароля') ?>

<h1>Восстановление пароля</h1>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

<script src="/script.js"></script>

<p><input type="text" placeholder="E-mail" id="email"></p>
<p><input type="text" placeholder="<?captcha_show()?>" id="captcha"></p>
<p><button onclick="post_query('gform', 'recovery', 'email.captcha')">Восстановить</button> </p>


<? bottom() ?>