<html>
<head>
	<title>display</title>
</head>
<body>



<?php foreach($skill as $skills){ ?>
           <tr style="text-align: center">
     <td>id</td>  <td><?php echo $skills['id'] ?></td>
       <td><?php echo $skills['skill'] ?></td>
        <td><?php echo $skills['created_on'] ?></td>
        <td><?php echo $skills['edit'] ?></td>

   <?php } 

?>
</tr>
</body>
</html>