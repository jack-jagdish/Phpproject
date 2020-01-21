<?php
$this->load->view('admin/header');
?>
<h1>Status</h1>
<a href="<?php echo site_url('admin/status/add')?>" class="btn btn-info">Add New Entries</a>
<hr>
<?php
if($this->session->flashdata('success')) {
	?>
	<div class="alert alert-success" role="alert">
		<strong> task done! </strong>
		<?php
		echo $this->session->flashdata('success');
		?>
	</div>
	<?php
}?>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>USERNAME</TH>
		<th>EMAIL-ADDRESS</th>
		<th>CURRENTSTATUS</th>
		<th>ACTION</th>
	</tr>
	<?php
	foreach( $status as $sts=>$key)
	{
		?>
	<tr>
		<td><?php echo $sts + 1;?></td>
		<td><?php echo $key->name;?></td>
		<td><?php echo $key->username;?></td>
		<td><?php echo $key->emailaddress;?></td>
		<td><?php echo $key->statusofcus ? 'ACTIVE' : 'INACTIVE' ;?></td>
		<td>
			<a href=" <?php echo site_url('admin/status/edit/'.$key->id ) ?>" class="btn btn-primary">Edit</a>
			<a href=" <?php echo site_url('admin/status/delete/'.$key->id ) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>
		<?php
	}
	?>
</table>
<?php
$this->load->view('admin/footer');
?>
