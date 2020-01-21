<?php
$this->load->view('admin/header');
?>
<h1> ADD NEW ENTRIES </h1>
<?php
if(isset($_GET['exist'])){
	?>

<div>
	<p>Duplicate email address </p>
	<?php
}
?>
<form action="<?php echo site_url('admin/status/save');?>" method="post" enctype="multipart/form-data">
	<hr>
	<div class="col-md-16">
			<div class="form-group">
				<div class="row">
					<label for="name" class="col-md-9" >Name (4 to 16 characters)</label>
					<div class="col-md-9">
					<input type="text" id="name" name="name"
						   minlength="4" maxlength="16" size="30">
					</div>
				<div class="clearfix"></div>
				</div>
			</div>
		<hr>
		<div class="form-group">
			<div class="row">
				<label class="col-md-9">Registered Email id</label>
				<div class="col-md-9">
					  <label for="email">Enter customer email:</label>
					<input name="emailaddress"  type="email" pattern="[^ @]*@[^ @]*" id="email" size="30" required>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<hr>
			</div>
			<div class ="form-group">
					<div class="row">
						<label class="col-md-9">Username for customer</label>
						<div class="col-md-9">
						<label for="username">Name (4 to 16 characters):</label>
						<input type="text" id="username" name="username" required
								   minlength="4" maxlength="16" size="30"></div>
					</div>
				</div>
				<hr>
			<div class="form-group">
				<div class="row">
					<label class="col-md-9">password</label>
					<div <div class="col-md-9">
						<div>
							<label for="pass">Password (8 characters 1 special char and 1 number ):</label>
							<input type="password" id="pass" name="password"
								   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
								   minlength="8"  required >
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
	<hr>
				<div class="form-group">
					<label for="statusofcus">STATUS</label>
					<select id="statusofcus" title="statusofthecustomer" class="formfield3" name="statusofcus" required="required" >
						<option></option>
						<option value="TRUE">Active</option>
						<option value="FALSE">Not Active</option>
					</select>
					<div class="clearfix"></div>
				</div>
			</div>
	<hr>
	<label class="col-md-9"></label>
			<div class="col-md-9">
			<input type="submit" name="submit" class="btn btn-info" value="Save Customer details">
			</div>
	<div class="clearfix"></div>
</form>
<?php
$this->load->view('admin/footer');
?>
