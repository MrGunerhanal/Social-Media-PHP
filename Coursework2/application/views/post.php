<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
        body{
            color:black;
            font-family: 'Lato', sans-serif;
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
    <th rowspan="2"><img src="https://w1483448.users.ecs.westminster.ac.uk/Coursework1/application/views/logo.png"></th>
    <td class="fontLogo">Burak's Special</td>
  </tr>
  <tr>
    <td>
        <a class="button" href="https://w1483448.users.ecs.westminster.ac.uk/Coursework1">Home</a>
        <a class="button" href="https://w1483448.users.ecs.westminster.ac.uk/Coursework1/index.php/welcome/files">Files</a>
        
    </td>
  </tr>
</table>
    <form action="<?php echo base_url();?>index.php/welcome/upload_comment" method="post">
        <label>Name<br><input type="text" name="name"><br></label>
        <label>Comment<br><textarea cols="35" rows="5" name="mes"></textarea></label><br>
        <input type="submit" name="post" value="Post">
    </form> 
</body>
</html>