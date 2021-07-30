<div class="container">
<div class="row">
<div class="col-md-12">
<h6>Show Member</h6>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th class="text-center">ID</th>
			<th class="text-center">EMAIL</th>
			<th class="text-center">NAME</th>
			<th class="text-center">LAST UPDATE</th>
			<th class="text-center">EDIT</th>
			<th class="text-center">DEL</th>
		</tr>
	</thead>
	<tbody>
<?php foreach($query as $rs){ ?>		
		<tr>
			<td class="text-center"><?php echo $rs->MEMBER_ID.'.'; ?></td>
			<td><?php echo $rs->MEMBER_EMAIL; ?></td>
			<td><?php echo $rs->MEMBER_NAME; ?></td>
			<td class="text-center"><?php echo date("d-m-Y H:i:s",strtotime($rs->MEMBER_UDATE)); ?></td>
			<td class="text-center"><a href="<?php echo site_url('form/edit/').$rs->MEMBER_ID; ?>">edit</a></td>
			<td class="text-center"><a href="<?php echo site_url('form/del/').$rs->MEMBER_ID; ?>" onclick="return confirm('Are you sure delete?');">del</a></td>
		</tr>
<?php } ?>
	</tbody>
</table>

</div>
</div>
</div>