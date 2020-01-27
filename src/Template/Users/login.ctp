<?php
$this->assign('title','login');
?>
<div class = "container">
    <h1>Login</h1>
        <?= $this->Form->create(null,['url' =>"/users/login"]); ?>
    <div class="form-group">
        <?= $this->Form->control('username',['placeholder'=>'username','class'=>"form-control w-50"]); ?>
    </div>
        <?php if(isset($username)) :?>
            <div class="mb-3 text-danger"><?= h($username) ;?></div>
        <?php endif ;?>
    <div class="form-group">
        <?= $this->Form->control('password',['placeholder'=>'password','class'=>"form-control w-50"]); ?>
        <?php if(isset($password)) :?>
            <div class="mb-3 text-danger"><?= h($password) ;?></div>
        <?php endif ;?>
    </div>
    <div class= "mt-3">
        <?= $this->Form->button('login',["class"=>"btn btn-primary w-25"]); ?>
    </div>
	<?= $this->Form->end(); ?>
        <div calss="mt-3">
            <button class ="btn w-25" style="background-color:#00acee;margin-top:15px; color:white;"onclick="location.href='twitter'">login by using twitter</button>
        </div>
        <?php echo $this->Html->link('signup',[
        'controller' => 'Users',
        'action' => 'add'
        ]) ?>
    <br>
</div>
