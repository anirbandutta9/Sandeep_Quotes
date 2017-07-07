<?php 
$quotes = explode("\n", file_get_contents('sandeepquotes.txt'));
$quote = $quotes[mt_rand(0 , count($quotes) - 1)];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sandeep Maheshwari Quotes</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <style type="text/css">
      * {
        font-size: 28pt;
        line-height: 2;
        font-family: "Times New Roman", Georgia, Serif;
        color: orangered;
      }
      body {
      	background-image: url("sandeep1.jpg");
        padding-top: 20%;
      }
    </style>
    </head>
    <body>
    	<blockquote class="text-center">
    		
    		<p><?php echo $quote; ?> </p> 
    	</blockquote>
    </body>
</html>
