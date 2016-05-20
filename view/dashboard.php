<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">

  div>span{
  	display: block;
    font-size: 14px;
    margin-bottom: 9px;
  }

  </style>
</head>
<body>
<?php 

	include_once '../app_functions/default_functions.php';

	if(array_key_exists("GROUP BY",$final_output)){
		unset($final_output['GROUP BY']);
	}





	
 ?>
<div class="container">



<h1>Select Contacts</h1>

<form method="post" action="message_process.php">

<input type="hidden" name="path" value="<?php echo $file_path; ?>">
<input type="checkbox" id="checkAll">Check All

            
  <table class="table">
    <tbody>
      <?php

      $i = 1; 
      $totalhtml = "";
      foreach ($final_output as $class => $student_values) {
      	$html1 = '<label><input type="checkbox" class="checkthis"><p style="text-align: center;font-size: 27px;font-style: initial;">'.$class.'</p></label><br>';
      	foreach ($student_values as $number_text => $number_and_names) {
      		foreach ($number_and_names as $number => $names) {
      			foreach ($names as $key => $name) {
      				$html1 = $html1.'
  <label><input type="checkbox" name = "name[]" value="'.$number.'">'.$name.'('.$number.')</label><br>';
      			}
      		}$totalhtml = $totalhtml.'<div class="checkbox"><fieldset>'.$html1.'</fieldset></div><hr/>';
      	}
      } 

      echo "$totalhtml";
      $totalhtml = "";
      $html1 = "";
      
      ?>
    </tbody>
  </table>
  <input type="submit" class="btn btn-primary" value="submit">
  <a href="../index.php"><input type="button" class="btn btn-warning" value="cancel"></a>

  </form>
</div>


<script type="text/javascript">
  
$(function () {
    $('.checkthis').on('click', function () {
        $(this).closest('fieldset').find(':checkbox').prop('checked', this.checked);
    });
});


$('body').on('change', '#checkAll', function(){
      $("input:checkbox").prop('checked', $(this).prop("checked"));
    });

</script>



</body>
</html>