<html>
<head>
	<title>References</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function() {
    var max_fields = 4;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><label for="ref">references:</label><input type="text" name="mytext" placeholder="enter both names "/><label for="contact">contact number:</label><input type="text" name="contact" placeholder="contact number eg phone"/><a href="#" class="delete">Delete</a></div>'); //add input box
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


</head>

<body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="container1">
    <button class="add_form_field">Add New Field &nbsp; 
      <span style="font-size:16px; font-weight:bold;">+ </span>
    </button>
</div>
	</body>