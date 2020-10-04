<h1>Addition Only Calculator</h1>

<?php
error_reporting(0);
$first_number = $_POST['first_number'];
$second_number = $_POST['second_number'];
?>

<form action="" method="post">
    <label for="first_number">First Number</label>
    <input type="number" name="first_number" value="<?php print $first_number?>"required>
<br>
    <label for="second_number">Second Number</label>
    <input type="number" name="second_number" value="<?php print $second_number?>"required>
<br>
    <input type="submit"  value="Calculate Sum!" name="submit">
</form>
<br>
<?php
if(isset($_POST['submit'])) { 
    $sum = $first + $second;
    print "<h1>Result:<h1>" .$first_number ." + " .$second_number ." = " .$sum;
}
?>
<!--this is so simple; its 24 lines. Yet it took me so long, please feel my pain. -->


