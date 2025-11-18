<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="tungolRegistration.css">
    <title>Log In</title>
  <script>
    function clearForm(){
        document.getElementById("loginForm").reset();
    }
    </script>

</head>
<body>
    <center>
    <h1> LOGIN FORM </h1>
<form id="loginForm">
    <table>
        <tr>
            <td><label for="tungolUsername" >Username</label></td>
            <td><input type="text" name="tungolUserName" id="tungolUserName" required></td>
            </tr>

        <tr>
            <td><label for="tungolPassword" >Password</label></td>
            <td><input type="password" name="tungolPassword" id="tungolPassword" required></td>
            </tr>
        <tr>
            <td>
                <button type="submit" name="tungolLogin" id="tungolbtn1">Login</button>
                <button type="button" name="tungolClear" onclick="clearForm()">Clear</button>
            </td>
        </tr>
</table>
</form>
</center>
</body>
</html>