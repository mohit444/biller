<nav class="navbar navbar-default">
  <div class="container">
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
        <ul class="nav navbar-nav navbar-right">
          <li><?php echo $this->Html->link('Users', array('controller'=>'Users', 'action'=>'index') ); ?></li>     
          
          <li><?php echo $this->Html->link('Customers', array('controller'=>'customers', 'action'=>'index') ); ?></li>
          
          <li><?php echo $this->Html->link('Products', array('controller'=>'products', 'action'=>'index')); ?></li>
        
          <li class="dropdown">
            <?php echo $this->Html->link('Orders <i class="fa fa-caret-down fa-fw"></i>', array(),array("class"=>"dropdown-toggle", "data-toggle"=>"dropdown",'escape'=>false) ); ?>
            <ul class="dropdown-menu dropdown-messages">
              <li><?php echo $this->Html->link('<i class="fa fa-plus fa-fw"></i> Add Orders', array('controller'=>'orders', 'action'=>'index'),array('escape'=>false) ); ?></li>
              <li><?php echo $this->Html->link('<i class="fa fa-edit fa-fw"></i> Manage Orders ', array('controller'=>'bills', 'action'=>'index'),array('escape'=>false) ); ?></li>
            </ul>            
          </li>

          <li class="dropdown">
            <?php echo $this->Html->link('<i class="fa fa-user fa-fw"></i>'.$this->Session->read("Auth.User.name").'<i class="fa fa-caret-down fa-fw"></i>', array(),array("class"=>"dropdown-toggle", "data-toggle"=>"dropdown",'escape'=>false) ); ?>
            <ul class="dropdown-menu dropdown-messages">
              <li><?php echo $this->Html->link(__('<i class="fa fa-wrench fa-fw"></i> Setting'),array('controller'=>'','action'=>'' ) ,array('escape'=>false) );?></li>
              <li><?php echo $this->Html->link('<span class="fa fa-sign-out fa-fw"> Logout', array('controller'=>'users', 'action'=>'logout'), array('escape'=>false) );?></li>
            </ul>            
          </li>          
        </ul>
      </div>
    <?php } ?>
  </div>
</nav>

