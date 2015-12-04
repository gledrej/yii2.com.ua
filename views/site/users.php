<h2>Пользователь</h2>
<?php foreach ($users as $user){?>
<div><b> <?=$user->user ?>:</b></br><?=$user->password?></br><b>Дата создания:</b><?=$user->date ?></div>
<?php } ?>