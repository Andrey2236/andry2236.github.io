<? top('Обратная связь') ?>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

<script src="/script.js"></script>

<h1>Обратная связь</h1>

<p><input type="text" placeholder="E-mail" value="<?=$_SESSION['email']?>" id="email"></p>
<p><textarea id="message" placeholder="Текст сообщения"></textarea></p>
<p><input type="text" placeholder="<?captcha_show()?>" id="captcha"></p>
<p><button onclick="post_query('mail', 'contact', 'email.message.captcha')">Отправить</button> </p>

<? bottom() ?>