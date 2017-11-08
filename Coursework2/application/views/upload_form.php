<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8">
    <title>Upload Image</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <style>
            body
            {
                color:black;
                font-family: 'Lato', sans-serif;
            }
            .textboxdesc
            {
                height:50px;
                width: 200px;
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
            .textboxtitle
            {
                width: 200px;
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
    <td class="fontLogo">Burak's Special</td>
  </tr>
</table>
    <form name ="userinput" action="upload_file" method="post"> 
        <table>
            <tr>
                <td>UserName</td>
                <td><input type="text" name="title" width="200" class="textboxtitle"></td>
            </tr>
             <tr>
                <td>Description</td>
                <td><input type="text" name="description" class="textboxdesc"></td>
            </tr>      
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>