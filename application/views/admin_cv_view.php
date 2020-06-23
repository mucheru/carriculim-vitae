<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cv ADMIN SET UP content</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>

<script>
  $( function() {
    $( "#selectable" ).selectable();
  } );
  </script>

<style>
 input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

#feedback { font-size: 1.4em; }
  #selectable .ui-selecting { background: #FECA40; }
  #selectable .ui-selected { background: #F39814; color: white; }
  #selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

</style>

</head>
<body>
 
<div id="accordion">
  <h3>Personal information set up 1</h3>
  <div>
      <?php echo validation_errors(); ?>
    <?php echo form_open('index.php/admin/admin_cv_setup'); ?>
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" name="firstname" placeholder="first name" value="<?= set_value('firstname')?>">
    </div>

  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" name="lastname" placeholder="last name" value="<?=set_value('lastname')?>">
    </div>

  <div class="form-group">
<label>Email</label>
<input type="email" class="form-control" name="email" placeholder="Email"> 
</div>

 <div class="form-group">
<label>Physical location</label>
<input type="text" class="form-control" name="physical_location" placeholder="Physical location"> 
</div>

<div class="form-group">
<label>ID Number</label>
<input type="text" class="form-control" name="idnum" placeholder="id number"> 
</div>

<div class="form-group">
<label>submit</label>
<input type="submit" class="form-control" name="submit"> 


</form>
</div>
    </p>
  </div>
  <h3>Education</h3>
  <div>
    <?php echo form_open('index.php/admin/validate_id/verifyid'); ?>
    <p>Briefly describe your education life!!!!!.You have to key in your ID number and submit to validate if you exist in the system or not.If you filled personal information we will let you proceed to the education area.</p>
<div class="form-group">
<label>ID Number</label>
<input type="text" class="form-control" name="idnumber" placeholder="id number"> 
</div>

<div class="form-group">
<label>submit</label>
<input type="submit" class="form-control" name="submit"> 
</div>
</form>

  </div>
  <h3>Skills                </h3>
  <div>
    <ol id="selectable">
  <li class="ui-widget-content">Item 1</li>
  <li class="ui-widget-content">Item 2</li>
  <li class="ui-widget-content">Item 3</li>
  <li class="ui-widget-content">Item 4</li>
  <li class="ui-widget-content">Item 5</li>
  <li class="ui-widget-content">Item 6</li>
  <li class="ui-widget-content">Item 7</li>
</ol> 



  </div>


  <h3>Referees</h3>
  <div>
    <p>Git hub projects </p>
<button type="button" onclick="window.location.href='references'" class="btn btn-info">Add references</button>

  </div>
</div>
 
 
</body>
</html>