<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tungol Addition</title>
    <link rel="stylesheet" href="tungolcalcu.css">

</head>
<body>
    <form action="tungolAddition.php" method="POST">
        <h2>
            <table>
                <h1>ADDITION</h1>
                <tr>
                    <td>
                        <label for="tungolFirstNumber"> First Number: </label>
                    </td>
                    <td>
                        <input type="number" id="tungol_FirstNumber" name="tungol_FirstNumber" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tungolSecondNumber"> Second Number: </label>
                    </td>
                    <td>
                        <input type="number" id="tungol_SecondNumber" name="tungol_SecondNumber" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="compute" class="tungolCompute"> Compute </button>
                    </td>
                </tr>
                <tr>
                    <td> The sum of two numbers is:  </td>
                    <td>
                        <input type="text" name="tungol_Answer" value="
                        <?php
                        include_once('tungolConnection.php');

                        if(isset($_POST['compute'])){
                            $tungol_FirstNumber = $_POST['tungol_FirstNumber'];
                            $tungol_SecondNumber = $_POST['tungol_SecondNumber'];
                            $tungol_Sum = $tungol_FirstNumber + $tungol_SecondNumber; echo $tungol_Sum;

                            $compute = mysqli_query($tungol_CONNECTION, "INSERT INTO tungolAddition(tungol_FirstNumber, tungol_SecondNumber, tungol_Sum)
                            VALUES ('$tungol_FirstNumber', '$tungol_SecondNumber', '$tungol_Sum')");
                        }
                        ?>">
                    </td>
                </tr>
            </table>
        </h2>
    </form>
</body>
</html>