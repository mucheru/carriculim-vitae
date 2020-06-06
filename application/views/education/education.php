<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Education</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .ui-resizable-se {
    bottom: 17px;
  }

  input[type=textarea], select {
  width: 200%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=file], select {
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
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  $( function() {
    $( "#resizable" ).resizable({
      handles: "se"
    });  
  } );


  </script>
   </head>
  <body>
   
<div>
<?php echo form_open_multipart('index.php/admin/validate_id/education'); ?>
 <?php echo validation_errors(); ?> 

 <?php foreach($idnum as $user){ ?>
           <tr style="text-align: center">
           <td><? =$user['idnum']?></td>    
   <?php } 
    

?>

  <input type="hidden" name ="id_num" value="<?php echo $user['idnum']; ?>">


<div class="form-group">
<label for="education"><strong>Briefly describe your education</strong></label>
</div>

 <div class="form-group">
<textarea name="education" id="resizable" rows="5" cols="20" class="form-control" placeholder="pls describe your eduaction level"></textarea>
  </div>

 <div class="form-group">
    <label for="exampleFormControlFile1">upload Accademics  </label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="upload">
  </div>
  
  
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
  


</form>
 
 
</body>
</html>