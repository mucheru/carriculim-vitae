<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Selectable - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
 
  <style>
  #feedback { font-size: 1.4em; }
  #selectable .ui-selecting { background: #ccc; }
  #selectable .ui-selected { background: #999; }
  #selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#selectable" ).selectable();
  } );
  </script>
</head>
<body>

 	<?php foreach($skill as $skills){ ?>
	<ol  id="selectable" ui-selectable>
	<li   class="ui-widget-content" > <?php echo $skills['skill'] ?></li> </ol> 
<?php } 

?>
 
 
<

</html