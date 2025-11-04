<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatdula Multiplication</title>
    <link rel="stylesheet" href="gatdulacalcu.css">

</head>
<body>
    <form action="gatdulaMultiplication.php" method="POST">
        <h2>
            <table>
                <h1>MULTIPLICATION</h1>
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
                    <td> The product of two numbers is: </td>
                    <td>
                        <input type="text" name="gatdula_Answer" value="
                        <?php
                        include_once('gatdulaConnection.php');

                        if(isset($_POST['compute'])){
                            $gatdula_FirstNumber = $_POST['gatdula_FirstNumber'];
                            $gatdula_SecondNumber = $_POST['gatdula_SecondNumber'];
                            $gatdula_Product = $gatdula_FirstNumber * $gatdula_SecondNumber; echo $gatdula_Product;

                            $compute = mysqli_query($GATDULA_CONNECTION, "INSERT INTO gatdulaMultiplication(gatdula_FirstNumber, gatdula_SecondNumber, gatdula_Product)
                            VALUES ('$gatdula_FirstNumber', '$gatdula_SecondNumber', '$gatdula_Product')");
                        }
                        ?>">
                    </td>
                </tr>
            </table>
        </h2>
    </form>
</body>
</html>
