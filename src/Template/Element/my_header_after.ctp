<header>
      <nav class="navbar navbar-expand navbar-light">
	<a href="<?= h(url) ?>posts/" class="navbar-brand" style = "padding-left: 30px;color: white;text-decoration: none;"><h2>Microblog</h2></a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="<?= h(url) ?>users/mypage" class="nav-link">mypage</a></li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
              <div class="form-row">
                  <?= $this->Form->create('User',['url' => ['controller'=>'Users','action' => 'search']]); ?>
                  <div class="col">
                      <?= $this->Form->control('search',['placeholder'=>'search...','class'=>"form-control w-100",'label'=>false]); ?>
                  </div>
              </div>
          </li>
          <li class="nav-item">
              <div class="col">
                  <?= $this->Form->button('search',["class"=>"form-control btn btn-outline-success my-2 my-sm-0"]); ?>
              </div>
              <?= $this->Form->end(); ?>
          </li>
          <li class="nav-item"><div class="col"><a href="<?= h(url) ?>users/logout" class="nav-link">logout</a></div></li>
        </ul>
      </nav>
</header>
