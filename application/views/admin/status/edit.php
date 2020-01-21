<?php
$this->load->view('admin/header');
?>
<h1>EDIT ENTRIES </h1>
<form action="<?php echo site_url('admin/status/update/'.$status->id);?>" method="post" enctype="multipart/form-data">
	<hr>

    <hr>
    <div class="col-md-16">
        <div class="form-group">
            <div class="row">
                <label for="name" class="col-md-9" >Name (4 to 12 characters)</label>
                <div class="col-md-9">
                    <input type="text" id="name" name="name" value="<?php echo $status->name;?>" minlength="4" maxlength="12" size="30">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="row">
                <label class="col-md-9">Registered Email id </label>
                <div class="col-md-9">
                    <label for="email">Enter customer email:</label>
                    <input name="emailaddress" id="email"  type="email" pattern="[^ @]*@[^ @]*" size="30" value="<?php echo $status->emailaddress;?>" required>
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
                       minlength="4" maxlength="16" size="30" value="<?php echo $status->username;?>" ></div>
        </div>
    </div>
    <hr>
    <div class="form-group">
        <div class="row">
            <label class="col-md-9">password for customer</label>
            <div <div class="col-md-9">
                <div>
                    <label for="pass">Password (8 characters minimum):</label>
                    <input type="password" id="pass" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                           minlength="8"  value="<?php echo $status->password;?>"required>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <hr>
			<div class="form-group">
				<strong class="ml-2">Active Status</strong>
				<select class="ml-1" name="statusofcus" [(ngModel)]="activeStatus" value="<?php echo $status->statusofcus;?>">
					<option></option>
					<option value="1">Active</option>
					<option value="0">Not Active</option>
				</select>
			<hr>
			<input type="submit" name="submit" class="btn btn-info" value="Save Customer details">
		</div>
		<div class="clearfix"></div>
</form>
<?php
$this->load->view('admin/footer');
?>

