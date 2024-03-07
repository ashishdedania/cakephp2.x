<section class="content">
	<div class="row login-div">
		<div class="login-title" >Login</div>
		<div class="error-div" ><label id="login-form-error" class="error" for=""></label></div>
		<div class="">

			<form id="loginfrm" data-url="<?php echo $this->Html->url(array('controller' => 'users','action' => 'login')); ?>">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input name="data[User][email]" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input name="data[User][password]" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Sing In</button>
			</form>
		</div>
	</div>
</section>

<?php echo $this->Html->script(['login']); ?>



