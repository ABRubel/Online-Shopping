<?php
// Start the session
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<body>
    <form action="insert_product.php" method="POST" enctype="multipart/form-data">

    	<p>
        <label for="Model_No">Model No</label>
        <input type="text" name="_Model_No" id="_Model_No" required="" /> 
        </p>

        <p>
        <label for="Price">Price</label>
        <input type="number" name="_Price" id="_Price"  required="" /> 
        </p>

        <p>
        <label for="Stock">Stock</label>
        <input type="number" name="_Stock" id="_Stock" required=""/> 
        </p>

        <p>
        <label for="Brand Name">Brand Name</label>
        <input type="text" name="_Brand_Name" id="_Brand_Name"  required="" /> 
        </p>

        <p>
        <label for="RAM">RAM</label>
        <input type="text" name="_RAM" id="_RAM" required="" /> 
        </p>

        <p>
        <label for="ROM">ROM</label>
        <input type="text" name="_ROM" id="_ROM" required="" /> 
        </p>

        <p>
        <label for="Camera">Camera</label>
        <input type="text" name="_Camera" id="_Camera"  required="" /> 
        </p>

        <p>
        <label for="Processor">Processor</label>
        <input type="text" name="_Processor" id="_Processor" required="" /> 
        </p>

        <p>
        <label for="DiscountFromCompany">Discount from Company</label>
        <input type="number" name="_DiscountFromCompany" id="_DiscountFromCompany" step="" /> 
        </p>

        <p>
        <label for="_DiscountFromWebsite">Discount from Website</label>
        <input type="number" name="_DiscountFromWebsite" id="_DiscountFromWebsite" step="" /> 
        </p>

        <p>
        <label for="_Discount_Date">Discount Date</label>
        <input type="date" name="_Discount_Date" id="_Discount_Date"  /> 
        </p>

        <p>
        <label for="_Release_Date">Release Date</label>
        <input type="date" name="_Release_Date" id="_Release_Date" required="" /> 
        </p>

        <p>
        <label for="_buys">No of Buy</label>
        <input type="number" name="_buy" id="_buy"  /> 
        </p>

        <p>
        <label for="Image"></label>
        Select image to upload:
        <input type="file" name="image"/>
        <br><br>
        <input type="reset">
        <input type="submit" name="submit" value="Confirm"/>
    	</p>
    </form>
</body>
</html>