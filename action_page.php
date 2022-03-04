<?php 
  echo "<pre>";
  print_r($_POST);   // Check if you're getting any POST data
  echo "</pre>";
?>

<?php if (isset($_POST['name'])) { ?>

 <h1>Form data</h1>
 <p>Name: <?php echo $_POST["name"]; ?> 
 </p>
 <p>Email: <?php echo $_POST["email"]; ?> 
 </p>
 <p>Major: <?php echo $_POST["major"]; ?> 
 </p>

<?php } ?>