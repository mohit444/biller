<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headermenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo $this->Html->link("BILLER", '//localhost/biller',array('class'=>'navbar-brand')); ?>
    </div>

    <?php if( $this->Session->check('Auth.User') ) { ?>
      <div class="collapse navbar-collapse" id="headermenu">
        <ul class="nav navbar-nav">
          <li><?php echo $this->Html->link('Users', array('controller'=>'Users', 'action'=>'index') ); ?></li>     
          
          <li><?php echo $this->Html->link('Customers', array('controller'=>'customers', 'action'=>'index') ); ?></li>
          
          <li><?php echo $this->Html->link('Products', array('controller'=>'products', 'action'=>'index') ); ?></li>
        
          <li><?php echo $this->Html->link('Orders', array('controller'=>'orders', 'action'=>'index') ); ?></li>
          
          <li><?php echo $this->Html->link('Invoices', array('controller'=>'bills', 'action'=>'index') ); ?></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><?php echo $this->Html->link('<span class="fa fa-user"> '.$this->Session->read('Auth.User.name'), array(), array('escape'=>false) );?></li>

          <li><?php echo $this->Html->link('<span class="fa fa-sign-out"> Logout', array('controller'=>'users', 'action'=>'logout'), array('escape'=>false) );?></li>
        </ul>
      </div>
    <?php } ?>
  </div>
</nav>