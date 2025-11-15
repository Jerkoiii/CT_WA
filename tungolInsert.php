
<?php 

    $jerwin = mysqli_connect("localhost", "root", "","tungol_proj" );

    if($jerwin==false)
        {
            die("ERROR: could not Connect." .mysqli_connect_error());
            
        }
            $tungolFirstName = $_REQUEST['tungolFirstName'];
            $tungolLastName = $_REQUEST['tungolLastName'];
            $tungolMail = $_REQUEST['tungolMail'];
            $tungolUsername = $_REQUEST['tungolUsername'];
            $tungolPassword = $_REQUEST['tungolPassword'];
            $tungolConfirmedPassword = $_REQUEST['tungolConfirmedPassword'];
            $tungolNumber = $_REQUEST['tungolNumber'];
            $tungolStreetAddress = $_REQUEST['tungolStreetAddress'];
            $tungolBarangay = $_REQUEST['tungolBarangay'];
            $tungolCity = $_REQUEST['tungolCity'];
            $tungolStateProvince = $_REQUEST['tungolStateProvince'];
            $tungolZipCode = $_REQUEST['tungolZipCode'];
            $tungolCountry = $_REQUEST['tungolCountry'];

            $tungol = "INSERT INTO tungol_registration VALUES ('$tungolFirstName',
            '$tungolLastName','$tungolMail','$tungolUsername',
            '$tungolPassword','$tungolConfirmedPassword','$tungolNumber',
            '$tungolStreetAddress','$tungolBarangay','$tungolCity',
            '$tungolStateProvince','$tungolZipCode','$tungolCountry')";

            if(mysqli_query($jerwin,$tungol))
            {
                echo "<h1> Registration Successfuly!</h1>";
                echo nl2br ("$tungolFirstName \n $tungolLastName \n
                $tungolMail \n $tungolUsername \n $tungolPassword \n
                $tungolConfirmedPassword \n $tungolNumber \n $tungolStreetAddress \n
                $tungolBarangay \n $tungolCity \n $tungolStateProvince \n
                $tungolZipCode \n $tungolCountry ");
            }
            else
            {
                echo "ERROR  Sorry $tungol." .mysqli_error($jerwin);
            }
           
   mysqli_close($jerwin);
   ?>