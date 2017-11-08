<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Display</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
      <style>
        body
        {
            font-family: 'Lato', sans-serif;
            color: #000;
            background: #fff;
        }
          .comment
          {
              color: aliceblue;
          }
    </style>
    </head>
    <body>
        <table style="border:1px; width:80%; overflow:auto; text-align:left;">
            <thead style="border:1px;">
            </thead>
            <tbody style="border1px;">
                 <?php
                foreach($this->b->getalldata()as $row)
                {
                ?>
                <tr>
                    <td><a href="https://w1483448.users.ecs.westminster.ac.uk/Coursework1/index.php/welcome/post"><?php echo $row->title?></a></td>
                </tr>
                <tr>
                    <td><?php echo $row->description?></td>
                </tr>
                <tr>
                    <td>
                        <a href="https://w1483448.users.ecs.westminster.ac.uk/Coursework1/index.php/welcome/post"><input type="image" src="https://w1483448.users.ecs.westminster.ac.uk/Coursework1/application/views/comment.png" alt="Submit" class="comment"></a>
                        <a href="post.php">like</a>
                        <a href="post.php">dislike</a>
                    </td>
                </tr>
                 <?php 
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
               