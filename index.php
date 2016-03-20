<?php

$ctl = $_POST['ctl'];
echo "<script type='text/javascript'>alert('$ctl');</script>";
$command = "sudo python ../relay.py $ctl";
$result = shell_exec($command);
echo($result);

?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="CSS Button Switches with Checkboxes and CSS3 Fanciness" />
<meta name="keywords" content="css3, css-only, buttons, switch, checkbox, toggle, web design, web development" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css' />
</head>
<title>Home Automation Dashboard</title>
<body>
<div class="container">    
<header>
        <h1>Control Lights</h1>
</header>

<form action="" method="POST" name="form" id="myForm">
<section class="main">
        <div class="switch demo2">
            <input type="checkbox" id="switch_it" checked>
                <label></label>
        </div>
    <input type="hidden" name="ctl" value="" id="ctl_value">
    <script type="text/javascript">  
        $(function(){
         $('#switch_it').on('change',function(){
         if ($('#switch_it').is(':checked')){
             $('#ctl_value').val(0);
             $('#myForm').submit();
         }
         else{
             $('#ctl_value').val(1);
             $('#myForm').submit();
         }
         
            });
        });
    </script>        
</section>
</form></p>

</div>
</body></html>
