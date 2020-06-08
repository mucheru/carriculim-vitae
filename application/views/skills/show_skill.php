<html>
<head>
    <title>display</title>

    
</head>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<body>


<tr>
   <strong> <th>ID</th></strong>
    &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp<strong><th>skill</th></strong>
    &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp<strong><th>created_on</th></strong>
    &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp<strong><th>status</th></strong>

<?php foreach($skill as $skills){ ?>
           <table style="width:40%">
    
     <tr><td
      <td> <?php echo $skills['id']; ?></td>
       <td><?php echo $skills['skill']; ?></td>
        <td><?php echo $skills['created_on']; ?></td>
         
      <td> <a  value="<?php echo $skills['id']; ?>" href="<?= site_url('/index.php/admin/Admin_cv_setup/edit_skills/'.$skills['id']); ?>"><span class="glyphicon glyphicon-trash">EDIT</span></a></td>
      <td> <a  value="<?php echo $skills['id']; ?>" href="<?= site_url('/index.php/admin/Admin_cv_setup/delete/'.$skills['id']); ?>"><span class="glyphicon glyphicon-trash">delete</span></a></td>

       <input type=hidden  value="<?php $skills['id']; ?>" name='id'>

    </tr>
</table>
   <?php } 

?>
</tr>

<script>

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function popupcontent_injection(data)
{
    $("html, body").animate({scrollTop: 0}, 500);
    $('.popup-popup-content').css({
        'background-color': '#fcfcfc',
        'opacity': '1',
        'border': '1px solid #c5c5c5',
        'display': 'block',
        'height': 'auto',
        //'left': '22%',
        'position': 'absolute',
        'top': '17px',
        'width': 'auto',
        'z-index': '999'
    });
    $('.popup__content').html(data);
    $('.popup-background').addClass('popup-widget-overlay');
    $('.main').css({
        'min-height': '670px'
    });
}

function popupcontent_ajax(data)
{
    $("html, body").animate({scrollTop: 0}, 500);
    $('.popup__content').html(data);
    $('.popup-background').addClass('popup-widget-overlay');
    $('.main').css({
        'min-height': '670px'
    });
    $('.popup-popup-content').css({
        'background-color': 'transparent',
        'opacity': '0.68',
        'border': 'none',
        'display': 'block',
        'height': 'auto',
        'left': '22%',
        'position': 'absolute',
        'top': '17px',
        'width': '535px',
        'z-index': '999'
    });
}

function edit_skill(id)
{
    popupcontent_ajax('<div class="image_loader" style=""></div>');
    var path = window.location;
    var url =  "edit_skills";
    $.post(url, {id: id}, function (data) {
        if (data != '')
        {
            popupcontent_injection(data);
        }
        else
        {
            var form = 'Invalid Request';
        }
    });
}




</script>
</body>
</html>