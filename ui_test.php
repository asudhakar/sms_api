<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
<body>

	<fieldset>
    <!-- these will be affected by check all -->
    <div><input type="checkbox" class="checkthis"> Check all</div>
    <div><input type="checkbox"> Checkbox</div>
    <div><input type="checkbox"> Checkbox</div>
    <div><input type="checkbox"> Checkbox</div>
</fieldset>
<fieldset>
   <div><input type="checkbox" class="checkthis"> Check all</div>
    <div><input type="checkbox"> Checkbox</div>
    <div><input type="checkbox"> Checkbox</div>
    <div><input type="checkbox"> Checkbox</div>
</fieldset>

<script type="text/javascript">
	

	$(function () {
    $('.checkall').on('click', function () {
        $(this).closest('fieldset').find(':checkbox').prop('checked', this.checked);
    });
});
</script>

</body>
</html>
 No newline at end of file
