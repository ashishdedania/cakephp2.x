<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css("bootstrap.css");
		echo $this->Html->css("starter-template.css");
		echo $this->Html->css("datatables.min.css");

		echo $this->fetch('meta');
		//echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->Html->script('jQuery3.7.1');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('jquery.validate.min.js');
		echo $this->Html->script('additional-methods.js');
		echo $this->Html->script('datatables.min.js');

		
	?>
</head>
<body>
    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Fixed navbar -->
      <?php echo ($this->element('front/header'))?>

      <!-- Begin page content -->
	  
      <div class="container">
	  	<?php echo $this->Flash->render(); ?>
		<?php echo $this->fetch('content'); ?>
      </div>
	  

	  <div id="footer">
	  <?php echo ($this->element('front/footer'))?>
	  </div>

    </div>

    
</body>
</html>
