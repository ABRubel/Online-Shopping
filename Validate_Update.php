<?php
    include 'db_connection.php';
    if(isset($_POST["submit"]))
    {
        //1 
        $Model_No=$_POST['_Model_No'];
        $Model=$_POST['Model'];

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

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false)
        {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $sql = "UPDATE product SET 
            Model_No=$Model_No, Price=$Price, Stock=$Stock, Brand_Name=$Brand_Name, RAM=$RAM, ROM=$ROM, Camera=$Camera, Processor=$Processor, DiscountFromCompany=$DiscountFromCompany,DiscountFromWebsite=$DiscountFromWebsite, Discount_Date=$Discount_Date, Release_Date=$Release_Date,image=$imgContent

            WHERE Model_No = $Model ";
        }
        if($result = mysqli_query($con, $sql))
        {
            echo "Records Updated.";
        } 
        else
        {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
}
?>


<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <p>
        <label for="Model_No">Model No You Want to Update</label>
        <input type="text" name="_Model_No" id="_Model_No" required="" /> 
        </p>
        <?php
            $sql=" Select * from product "; 
            if($result = mysqli_query($con, $sql))
            {
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {

                    }
                }
            }
         ?>
        <p>
        <label for="Model_No">Model_No</label>
        <input type="text" name="_Model_No" id="_Model_No" required="" value="<?php echo $row[0];?>" /> 
        </p>

        <p>
        <label for="Price">Price</label>
        <input type="number" name="_Price" id="_Price"  required=" value="<?php echo $row[1];?>"/> 
        </p>

        <p>
        <label for="Stock">Stock</label>
        <input type="number" name="_Stock" id="_Stock" required="" value="<?php echo $row[2];?>"/> 
        </p>

        <p>
        <label for="Brand Name">Brand Name</label>
        <input type="text" name="_Brand_Name" id="_Brand_Name"  required="" value="<?php echo $row[3];?>"/> 
        </p>

        <p>
        <label for="RAM">RAM</label>
        <input type="text" name="_RAM" id="_RAM" required="" value="<?php echo $row[4] ;?>"/> 
        </p>

        <p>
        <label for="ROM">ROM</label>
        <input type="text" name="_ROM" id="_ROM" required="" value="<?php echo $row[5];?>"/> 
        </p>

        <p>
        <label for="Camera">Camera</label>
        <input type="text" name="_Camera" id="_Camera"  required="" value="<?php echo $row[6];?>" /> 
        </p>

        <p>
        <label for="Processor">Processor</label>
        <input type="text" name="_Processor" id="_Processor" required="" value="<?php echo $row[7];?>"/> 
        </p>

        <p>
        <label for="DiscountFromCompany">Discount from Company</label>
        <input type="number" name="_DiscountFromCompany" id="_DiscountFromCompany" step="" value="<?php echo $row[8];?>"/> 
        </p>

        <p>
        <label for="_DiscountFromWebsite">Discount from Website</label>
        <input type="number" name="_DiscountFromWebsite" id="_DiscountFromWebsite" step="" value="<?php echo $row[9];?>"/> 
        </p>

        <p>
        <label for="_Discount_Date">Discount Date</label>
        <input type="date" name="_Discount_Date" id="_Discount_Date" value="<?php echo $row[10];?>" /> 
        </p>

        <p>
        <label for="_Release_Date">Release Date</label>
        <input type="date" name="_Release_Date" id="_Release_Date" required="" value="<?php echo $row[11];?>"/> 
        </p>

        <p>
        <label for="Image"></label>
        Select image to upload:
        <input type="file" name="image" value="<?php echo $row[12];?>"/>
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