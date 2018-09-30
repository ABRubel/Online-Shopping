<?php

include_once 'db_connection.php';

if(isset($_POST["submit"]))
{

//1	
	$Model_No=$_POST['_Model_No'];
//2	
	$Price=$_POST['_Price'];
//3
	$Stock=$_POST['_Stock'];	
//4	
	$Brand_Name=$_POST['_Brand_Name'];
//5	
	$RAM=$_POST['_RAM'];
//6	
	$ROM =$_POST['_ROM'];
//7	
	$Camera=$_POST['_Camera'];
//8	
	$Processor=$_POST['_Processor'];
//9
	$DiscountFromCompany=$_POST['_DiscountFromCompany'];
//10
	$DiscountFromWebsite=$_POST['_DiscountFromWebsite'];
//11
	$Discount_Date=$_POST['_Discount_Date'];
//12
	$Release_Date=$_POST['_Release_Date'];

	$buy=$_POST['_buy'];

	$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false)
    {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

		$sql = 
		"INSERT INTO product ( Model_No, Price, Stock, Brand_Name, RAM, ROM, Camera, Processor, DiscountFromCompany,
								DiscountFromWebsite, Discount_Date, Release_Date, image,buys)     VALUES 

			('$Model_No', '$Price','$Stock', '$Brand_Name', '$RAM', '$ROM', '$Camera','$Processor',
			'$DiscountFromCompany', '$DiscountFromWebsite','$Discount_Date','$Release_Date','$imgContent','$buy')";

			if(mysqli_query($con, $sql))
			{
		    	echo "Records inserted successfully.";
			} 
			else
			{
		    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
	}
}
mysqli_close($con);
?>

