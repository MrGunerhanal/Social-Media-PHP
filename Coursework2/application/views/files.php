<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org.org/1999/xhtml">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Display</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
      <style>
          body
          {
              color:black;
              font-family: 'Lato', sans-serif;
          }
          .imgSize
          {
              height: 20px;
              width: 20px;
              padding: 3px;
          }
          .button
            {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 2px 2px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
            .fontLogo
            {
                color:black;
                font-family: 'Lato', sans-serif;
                font-size: 30px;
            }
    </style>
    </head>
    <body>
        
<table>
  <tr>
    <th rowspan="2"><img src="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/application/views/logo.png"></th>
    <td class="fontLogo"><?php echo $this->session->userdata('username'); ?>'s Special</td>
      
  </tr>
       <tr>
    <td>
        <a class="button" href="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/index.php/welcome/displayPost">Home</a>
        <a class="button" href="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/">Files</a>
        <a class="button" href="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/index.php/welcome/displayRegister">Register</a>

    </td>
  </tr>
</table>
        <table>
            <tr>
                <td><div>
			Login Form
			</div>
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
                </td>
           
            </tr>
        </table>

        <table style="border:1px; width:80%; overflow:auto; text-align:left;">
            <thead style="border:1px;">
            </thead>
            <tbody style="border1px;">
                 <?php
                foreach($rows as $row)
                {
                ?>
                <tr>
                    <td><a href="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/index.php/welcome/post"><?php echo $row->title?></td></a>
                </tr>
                <tr>
                    <td><?php echo $row->description?></td>
                </tr>
                <tr>
                    <td>
                                            
<a href="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/index.php/welcome/post"><input type="image" src="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/application/views/comment.png" alt="Submit" class="imgSize"></a>
                        
                        <a href="index.php/welcome/increase?value=<?php echo $id=$row->id;?>"><input type="image" src="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/application/views/like.png" alt="Submit" class="imgSize"></a>
                        
                        <a href="index.php/welcome/decrease?value=<?php echo $id=$row->id;?>"><input type="image" src="https://w1483448.users.ecs.westminster.ac.uk/Coursework2/application/views/dislike.png" alt="Submit" class="imgSize"></a>
                        <?php echo $row->vote?>
                        
                        <hr>
                    </td>
                </tr>
                 <?php 
                }
                ?>
            </tbody>
        </table>
        
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $("#login").click(function(event){
                event.preventDefault();

                var username = $("input#username").val();
                var password = $("input#password").val();

                $.ajax({//communicates to server without having to refresh
                    type:"POST",
                    url: "<?php echo site_url('Welcome/login'); ?>",
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
