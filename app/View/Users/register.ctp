<section class="content">
	<div class="row register-div">
		<div class="login-title" >Register</div>
		<div class="error-div" ><label id="login-form-error" class="error" for=""></label></div>
		<div class="">

			<form id="registerfrm" data-url="<?php echo $this->Html->url(array('controller' => 'users','action' => 'register')); ?>">

                <div class="form-group">
					<label for="exampleInputFirstName1">First Name</label>
					<input name="data[User][firstname]" type="text" class="form-control" id="exampleInputFirstName1" placeholder="First Name">
				</div>

                <div class="form-group">
					<label for="exampleInputLastName1">Last Name</label>
					<input name="data[User][lastname]" type="text" class="form-control" id="exampleInputLastName1" placeholder="Last Name">
				</div>

                <div class="form-group">
					<label for="exampleInputContectNo1">Contact Number</label>
					<input name="data[User][contact_number]" type="text" class="form-control" id="exampleInputContectNo1" placeholder="Contact Number">
				</div>

              

                <div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input name="data[User][email]" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input name="data[User][password]" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
                <div class="form-group">
					<label for="exampleInputConfirmPassword1">Confirm Password</label>
					<input name="data[User][confirm_password]" type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password">
				</div>
                <div class="form-group">
					<label for="exampleInputConfirmAddress1">Address</label>
                    <textarea name="data[User][address]" class="form-control" id="exampleInputConfirmAddress1" placeholder="Address"></textarea>
				</div>
                <div class="form-group">
					<label for="exampleInputConfirmState1">State</label>
                    <select name="data[User][state]" class="form-control" id="exampleInputConfirmState1">
                        <?php foreach($states as $state) { ?>
                            <option value="<?php echo $state;?>"><?php echo $state;?></option>
                        <?php } ?>
                    </select>
					
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
    </div>
</section>

<?php echo $this->Html->script(['register']); ?>

