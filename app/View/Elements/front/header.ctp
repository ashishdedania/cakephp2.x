<div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">VisionEye</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              

              <?php 
				if($this->Session->read('Auth.User')){
              ?>
                <li>
                    <?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout'),array('escape' => false,'class'=>'nav-item','id'=>''));  ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Users',array('controller'=>'users','action'=>'index'),array('escape' => false,'class'=>'nav-item','id'=>''));  ?>
                </li>
              <?php } else { ?>
                <li>
                    <?php echo ($this->Html->link('Signin',array('controller'=>'users','action'=>'login'), array('escape'=>false,'class'=>'nav-item fancybox','id'=>'SignupBtn','data-fancybox-type'=>'ajax'))); ?>
               </li> 
                <li>
                    <?php echo ($this->Html->link('Signup',array('controller'=>'users','action'=>'register'), array('escape'=>false,'class'=>'nav-item fancybox','id'=>'SignupBtn','data-fancybox-type'=>'ajax'))); ?>
               </li>  
                
              <?php } ?>  
            </ul>
          </div>
        </div>
      </div>