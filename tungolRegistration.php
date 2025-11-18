<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="tungolRegistration.css">
    <script>
        function clrfrm()
        {
            document.querySelector('Form').reset();
        }
        </script>       
    
</head>
<body>
    <center>
    <form action="tungolInsert.php" method="post"> 
        <h1> REGISTRATION FORM </h1>
        <table> 
            <h2>
             <tr>
                   <td><label for="tungolFullName"> Full Name</label></td>
                   <td><input type="text" name="tungolFirstName" id="tungolFirstName" required> <br>
                   <label>First Name </label>
                   </td>

                   <td><input type="text" name="tungolLastName" id="tungolLastName" required><br>
                   <label>Last Name </label>
                   </td>
             </tr>

             <tr>
                   <td><label for="tungolEmail"> Email </label></td>
                   <td><input type="mail" name="tungolMail" id="tungolMail" required></td>
            </tr>

             <tr>
                   <td><label for="tungolUSername">Username</label></td>
                   <td><input type="text" name="tungolUsername" id="tungolUsername" required></td>
            </tr>

            <tr>
                   <td><label for="tungolPassword">Password</label></td>
                   <td><input type="password" name="tungolPassword" id="tungolPassword" required></td>
            </tr>
            
            <tr>
                   <td><label for="tungolConfirmedPassword">Confirmed Password</label></td>
                   <td><input type="password" name="tungolConfirmedPassword" id="tungolConfirmedPassword" required></td>
            </tr>

             <tr>
                   <td><label for="tungolPhoneNumber">Phone Number</label></td>
                   <td><input type="number" name="tungolNumber" id="tungolNumber" required></td>
            </tr>

             <tr>
                   <td><label for="tungolAddress">Address</label></td>
                   <td><input type="text" name="tungolStreetAddress" id="tungolStreetAddress" required><br>
                   <label>Street Address</label>
                   </td>
                   <td><input type="text" name="tungolBarangay" id="tungolBarangay" required><br>
                   <label>Barangay</label>
                   </td>
            </tr>
             <tr>
                   <td></td>
                   <td><input type="text" name="tungolCity" id="tungolCity" required><br>
                   <label>City</label>
                   </td>
                   <td><input type="text" name="tungolStateProvince" id="tungolStateProvince" required><br>
                   <label>State/Province</label>
                   </td>
            </tr>
             <tr>
                   <td></td>
                   <td><input type="text" name="tungolZipCode" id="tungolZipCode" required><br>
                   <label>Zip Code</label>
                   </td>
                   <td><input type="text" name="tungolCountry" id="tungolCountry" required><br>
                   <label>Country</label>
                   </td>
            </tr>
            </tr>

            <tr>
                <td>
                    <button type="submit" name="tungolSubmit" class="tungolSubmit" id="btn1">Register</button>
                    <button type="button" id="tungolbtn2" onclick="clrfrm()">Clear</button>
                </td>
            </tr> 
    </h2>
    </table>
    </form>
    </Center>
</body>
</html>