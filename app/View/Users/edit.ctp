<section class="content">
	<div class="row register-div">
		<div class="login-title" >Edit User</div>
		<div class="error-div" ><label id="login-form-error" class="error" for=""></label></div>
		<div class="">

			<form id="registerfrm" data-url="<?php echo $this->Html->url(array('controller' => 'users','action' => 'edit',$user['User']['id'])); ?>">
				<input type="hidden" name="data[User][id]" value="<?php echo $user['User']['id']; ?>" />
                <div class="form-group">
					<label for="exampleInputFirstName1">First Name</label>
					<input name="data[User][firstname]" value="<?php echo $user['User']['firstname']; ?>" type="text" class="form-control" id="exampleInputFirstName1" placeholder="First Name">
				</div>

                <div class="form-group">
					<label for="exampleInputLastName1">Last Name</label>
					<input name="data[User][lastname]" value="<?php echo $user['User']['lastname']; ?>" type="text" class="form-control" id="exampleInputLastName1" placeholder="Last Name">
				</div>

                <div class="form-group">
					<label for="exampleInputContectNo1">Contact Number</label>
					<input name="data[User][contact_number]" value="<?php echo $user['User']['contact_number']; ?>" type="text" class="form-control" id="exampleInputContectNo1" placeholder="Contact Number">
				</div>

              

                <div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input name="data[User][email]" value="<?php echo $user['User']['email']; ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				
                <div class="form-group">
					<label for="exampleInputConfirmAddress1">Address</label>
                    <textarea name="data[User][address]" class="form-control" id="exampleInputConfirmAddress1" placeholder="Address">
					<?php echo $user['User']['address']; ?>
					</textarea>
				</div>
                <div class="form-group">
					<label for="exampleInputConfirmState1">State</label>
                    <select name="data[User][state]" class="form-control" id="exampleInputConfirmState1">
                        <?php foreach($states as $state) { 
							$selected = '';
							if($user['User']['state'] == $state)
							{
								$selected = 'selected';
							}
							?>
                            <option value="<?php echo $state;?>" <?php echo $selected;?>><?php echo $state;?></option>
                        <?php } ?>
                    </select>
					
				</div>

				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="data[User][is_admin]" <?php if($user['User']['is_admin'] == 1) { echo 'checked';}?>>
					<label class="form-check-label" for="flexCheckDefault">
						is Admin
					</label>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</section>

<?php echo $this->Html->script(['edit']); ?>

