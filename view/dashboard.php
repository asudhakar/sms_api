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
 <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="../index.php">Home</a></li>
            <li role="presentation"><a href="http://vefetch.com/">About</a></li>
            <li role="presentation"><a href="view/login.php?action=logout">Logout</a></li>
          </ul>
        </nav>
        <img src="../images/company_logo.png" height="125px" width="220px">
      </div>


<h1>Select Contacts</h1>

<form method="post" action="message_process.php">

<input type="hidden" name="path" value="<?php echo $file_path; ?>">
<div class="checkbox">
  <label><input type="checkbox" id="checkAll">Check All</label>
</div>

            
  <table class="table">
    <tbody>
      <?php

      $i = 1; 
      $totalhtml = "";
      foreach ($final_output as $class => $student_values) {
        $html1 = '<input type="checkbox" id="check"><h2>'.$class.'</h2>';
        foreach ($student_values as $number_text => $number_and_names) {
          foreach ($number_and_names as $number => $names) {
            foreach ($names as $key => $name) {
              $html1 = $html1.'<span><label><input type="checkbox" name = "name[]" value="'.$number.'" >&nbsp;&nbsp;'.$name.'('.$number.')</label></span>';
            }
          }$totalhtml = $totalhtml.'<div>'.$html1.'</div><hr/>';
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
  

$('body').on('change', '#checkAll', function(){
      $("input:checkbox").prop('checked', $(this).prop("checked"));
    });

</script>



</body>
</html>