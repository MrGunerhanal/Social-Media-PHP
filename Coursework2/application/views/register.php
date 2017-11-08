<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    
                        <div>
                            Register Form
                        </div>


                       <?php echo form_open("welcome/save", array("id" => "form-user", "class" => "form-horizontal")) ?>
					<div class="form-group">
						<label for="username" >Username</label>
						<div >
							<input type="text" name="username" id="username" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="password" >Password</label>
						<div >
							<input type="password" name="password" id="password" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="password_confirm" >Password Confirm</label>
						<div >
							<input type="password" name="password_confirm" id="password_confirm" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div >
							<button type="submit" class="btn btn-primary" id="form-user">Save</button>
						</div>
            </td>
</body>
</html>     