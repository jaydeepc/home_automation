<?php

$ctl = $_POST['ctl'];
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
<script>
$('#switch_it').on('change', function(){
    if ($(this).is(':checked')) {
        document.getElementById("myForm").submit();
    } else {
//        $('form').attr('action', 'invoiceCreate.php');
    }
});
</script>
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
            <input type="checkbox" id="switch_it">
                <label></label>
        </div>
        <input type="hidden" name="ctl" value="1">
</section>
</form></p>

<form action="" method="POST" name="form">
<p class="lol">
<input type="submit" id="off" value="OFF">
<input type="hidden" name="ctl" value="0">
</form>
</p>

</div>
</body></html>
