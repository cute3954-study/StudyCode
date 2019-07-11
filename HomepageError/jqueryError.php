<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="js/jquery-2.2.3.min.js"></script>
<script>
$(function(){
     $('#a').click(function () {
		$('#result').slidedown();
     });
     $('#b').click(function () {
 		$('#result').slideup();
      });
 });
//"Uncaught SyntaxError: jQuery is not defined".
//$(...).slideup is not a function
//$(...).slidedown is not a function
</script>
</head>
<body>
	<input type="button" id="a" value="down">
	<input type="button" id="b" value="up"><br/>
	<img id="result" style="max-width: 300px;" src="images/apartment-architectural-design-architecture-1115804.jpg">
</body>
</html>