 <html>
 <head>
 	<title>id</title>
 </head>
 <body>
 <div>
    <?php echo form_open('index.php/admin/admin_cv_setup/verify_idnumber'); ?>
    <p>You have to key in your ID number and submit to validate if you exist in the system or not.If you filled personal information we will let you submit</p>
<div class="form-group">
<label>ID Number</label>
<input type="text" class="form-control" name="idnumber" placeholder="id number"> 
</div>

<div class="form-group">
<label>submit</label>
<input type="submit" class="form-control" name="submit"> 
</div>
</div>
</body>
</html>