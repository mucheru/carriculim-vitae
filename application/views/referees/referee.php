<html>
<head>
	<title>References</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><label for="ref">references:</label><input type="text" name="mytext" placeholder="enter both names "/><label for="contact">contact number:</label><input type="text" name="mobile_number" value= <?php echo str_pad('+',4,'254',STR_PAD_RIGHT); ?> placeholder="contact number eg phone"/><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
</script>
<script> 
function addTextBox() {
var element = document.createElement("input");

element.setAttribute("type", "text");
element.setAttribute("value", "");
element.setAttribute("name", "Id_number");
document.body.appendChild(element);
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



</head>

<body>

 <?php echo form_open('index.php/admin/admin_cv_setup/references'); ?>

<div class="container1">
    <button class="add_form_field">Add New Field &nbsp; 
      <span style="font-size:16px; font-weight:bold;">+ </span>
    </button>
</div>

Enter your Id number:<input type="text" name="Id_number" placeholder="Enter your Id number" > <br>
<input type="submit" value="Submit reference data" name="submit">
</form>
</body>