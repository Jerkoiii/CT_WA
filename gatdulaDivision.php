<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatdula Division</title>
    <link rel="stylesheet" href="gatdulacalcu.css">

</head>
<body>
    <form action="gatdulaDivision.php" method="POST">
        <h2>
            <table>
                <h1>DIVISION</h1>
                <tr>
                    <td>
                        <label for="gatdulaFirstNumber"> First Number: </label>
                    </td>
                    <td>
                        <input type="number" id="gatdula_FirstNumber" name="gatdula_FirstNumber" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gatdulaSecondNumber"> Second Number: </label>
                    </td>
                    <td>
                        <input type="number" id="gatdula_SecondNumber" name="gatdula_SecondNumber" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="compute" class="gatdulaCompute"> Compute </button>
                    </td>
                </tr>
                <tr>
                    <td> The quotient of two numbers is: </td>
                    <td>
                        <input type="text" name="gatdula_Answer" value="
                        <?php
                        include_once('gatdulaConnection.php');

                        if(isset($_POST['compute'])){
                            $gatdula_FirstNumber = $_POST['gatdula_FirstNumber'];
                            $gatdula_SecondNumber = $_POST['gatdula_SecondNumber'];
                            $gatdula_Quotient = $gatdula_FirstNumber / $gatdula_SecondNumber; echo $gatdula_Quotient;

                            $compute = mysqli_query($GATDULA_CONNECTION, "INSERT INTO gatdulaDivision(gatdula_FirstNumber, gatdula_SecondNumber, gatdula_Quotient)
                            VALUES ('$gatdula_FirstNumber', '$gatdula_SecondNumber', '$gatdula_Quotient')");
                        }
                        ?>">
                    </td>
                </tr>
            </table>
        </h2>
    </form>
</body>
</html>
