<section class="content">
	<div class="row">
		<div class="login-title" >Users </div>
		<input type="hidden" value=<?php echo $this->Html->url(array('controller' => 'users','action' => 'delete')); ?> id="deleteurl">
		<input type="hidden" value=<?php echo $this->Html->url(array('controller' => 'users','action' => 'ajaxData')); ?> id="ajaxurl">
		

		<table id="example" class="display" style="width:100%">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Contact Number</th>				
					<th>Email</th>
					<th>Role</th>
					<th>Address</th>
					<th>State</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="5" class="dataTables_empty">Loading data from server...</td>
				</tr>
			</tbody>        
    	</table>
	</div>
</section>

<?php echo $this->Html->script(['list']); ?>

