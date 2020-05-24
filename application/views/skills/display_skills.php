<?php foreach($skill as $skills){ ?>
           <tr style="text-align: center">
           	<td>ID</td>
     <br><td><?php echo $skills['id'] ?></td>
      <td>skills</td><br><?php echo $skills['skill'] ?></td> <td>created on</td> <td><?php echo $skills['created_on'] ?></td>
       <td>status</td> <td><?php echo $skills['status'] ?></td><br>

   <?php } 

?>
