
<title>ADMIN - Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/dist/css/bootstrap.css">
</head>
<body>
<form class="form-inline my-2 my-lg-0">
	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	<button class="btn btn-outline-success my-12 my-sm-10" type="submit">Search</button>
</form>
<div class="login col-md-4 mx-auto text-center">
    <h1>ADMIN Login</h1>
	<?php
	if ($this->session->flashdata('Error'))
	{
		?>
		<b>
		<?php echo $this->session->flashdata('Error');?>
		</b>

	<?php

	}


	?>
    <form method="post" action=" ">
        <div class="form-group">
            <input name="emailaddress"  type="email" pattern="[^ @]*@[^ @]*" placeholder="Emailaddress" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" placeholder="Password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Login" class="btn btn-primary">
        </div>
    </form>
</div>
</body>
</html>


