<?php
    include 'db_connection.php';
    if(isset($_POST["submit"]))
    {
        $Model=$_POST['_Model_No'];

	}
?>


<!DOCTYPE html>
<html lang="en">
<body>
    <form action="Validate_Update.php" method="POST" enctype="multipart/form-data">
    <p>
    <label for="Model_No">Enter Model No</label>
    <input type="text" name="_Model_No" id="_Model_No" required="" /> 
    <br><br>
        <input type="reset">
        <input type="submit" name="submit" value="Confirm"/>
    </p>
    </form>
</body>
</html>
<?php

mysqli_close($con);

?>