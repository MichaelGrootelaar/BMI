<!DOCTYPE html>

<?php
  session_start();
  $weight = $_GET['weight'];
  $length = $_GET['length'];
  $cookie = unserialize($_COOKIE['BMI']);
  $array = $_SESSION['BMI'];
?>

<html>
  <head>
    <title>BMI</title>
  </head>

  <body>
    <form method="POST" action="submit.php">
      <input type="number" name="weight" placeholder="weight" value="<?php echo $weight; ?>"><br>
      <input type="number" name="length" placeholder="length" value="<?php echo $length; ?>"><br>
      <input type="submit">
    </form>
    <br>
    <br>

    <h3>Outcome:</h3>
    <?php echo '<p>Weight:'.$cookie[0].', Height:'.$cookie[1].', Result:'.$cookie[2]; ?>
    <br>

    <h3>Outcomes:</h3>
    <?php
      if (isset($_SESSION['BMI'])){
        foreach($array as $BMI) {
          echo '<p>Weight:'.$BMI[0].', Height:'.$BMI[1].', Result:'.$BMI[2];
        }
      }
    ?>

  </body>
</html>
