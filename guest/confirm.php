<?
if ( !$_SESSION['confirm']['code'] ) not_found();

top('Подтверждение') ?>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<script src="/script.js"></script>

<h1>Подтверждение</h1>
<p><input type="text" placeholder="Код" id="code"></p>
<p><button onclick="post_query('gform', 'confirm', 'code.captcha')">Подтвердить</button> </p>


<? bottom() ?>