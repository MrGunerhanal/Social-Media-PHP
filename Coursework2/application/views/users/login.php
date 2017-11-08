
	
			<div>
				User Form
			</div>
			<div >
                <form class="form-horizontal">
					<div class="form-group">
						<label for="username" >Username</label>
						
							<input type="text" name="username" id="username" class="form-control">
						
					</div>
					<div class="form-group">
						<label for="password" >Password</label>
						
							<input type="password" name="password" id="password" class="form-control">
						
					</div>
					<div class="form-group">
						
							<button type="submit" class="btn btn-primary" id="login">Save</button>
						
					</div>
				</form>
			</div>
<a href="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/index.php/welcome/createView">Create Account</a>
<a href="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/index.php/welcome/files">Browse</a>

<script type="text/javascript">
    $(document).ready(function(){
        $("#login").click(function(event){
                event.preventDefault();

                var username = $("input#username").val();
                var password = $("input#password").val();

                $.ajax({
                    type:"POST",
                    url: "<?php echo site_url('welcome/login'); ?>",
                    data: {username:username, password:password},
                    success:function(value){
                        if (value === "error"){
                            alert('LOGIN FAILED!');
                            location.reload(true);
                        }else{
                            alert('YOU HAVE LOGGED IN!');
                            location.reload(true);
                        }
                    }
                });
            });
        });
</script>