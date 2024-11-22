
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $flavour = $_POST['flavor'];
        $color= $_POST['color'];
        $topping = $_POST['topping'];
        $size = $_POST['size'];
        $message = $_POST['message'];
        $argument = $_POST['agree'];
        $deriverance = $_POST['deriver'];
        $payment = $_POST['payment'];
        $password = $_POST['password'];
    
?>
<style>
    body {
        background-image: url(./Webform.jpg);
        font-family: sans-serif;
        display: flex; /* Flexbox layout */
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        height: 100vh; /* Full viewport height */
        margin: 0;
        padding: 15px;
    }

    table {
        width: 90%; /* Increase table width */
        font-size: 1.2em; /* Increase text size */
        background-color: #ffffff57;
        border-radius: 20px;
        padding: 20px 10px;
        margin: auto;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
    }

    th, td {
        padding: 15px; /* Add padding inside cells */
        text-align: center; /* Center text alignment */
        border: 1px solid black;
    }

    th {
        background-color: #583517;
        color: white;
    }

    .first-row {
        background-color: #f5e5c0;
    }

    .second-row {
        background-color: #5e3b1c;
        color: white;
    }

    .third-row {
        background-color: #f5e5c0;
    }

    .forth-row {
        background-color: #5e3b1c;
        color: white;
    }
</style>

      <table border="1">
        <tr>
            <th colspan="2">Client's Information</th>
            <th colspan="2">Flavor</th>
            <th colspan="2">Mode of payment</th>
            <th colspan="2">Customization</th>
        </tr>
        <tr>
            <td rowspan="2" class="first-row"><strong>Name</strong></td>
            <td rowspan="2" class="first-row"><?php echo $name ?></td>
            <td rowspan="3" class="second-row"><strong>Flavor</strong></td>
            <td rowspan="3" class="second-row"><?php echo $flavour ?></td>
            <td rowspan="3" class="third-row"><strong>Payment</strong></td>
            <td rowspan="3" class="third-row"><?php echo $payment ?></td>
            <td class="forth-row"><strong>Topping</strong></td>
            <td class="forth-row"><?php echo $topping ?></td>
        </tr>
        <tr>
            <td class="forth-row"><strong>Size</strong></td>
            <td class="forth-row"><?php echo $size ?></td>
        </tr>
        <tr>
            <td class="first-row"><strong>Email</strong> </td>
            <td class="first-row"><?php echo $email ?></td>
            <td class="forth-row"><strong>Argument</strong></td>
            <td class="forth-row"><?php echo $argument ?></td>
        </tr>
        <tr>
            <td class="first-row"><strong>Phone</strong></td>
            <td class="first-row"><?php echo $phone ?></td>
            <td rowspan="2" class="second-row"><strong>Color</strong></td>
            <td rowspan="2" class="second-row"><?php echo $color ?></td>
            <td rowspan="2" class="third-row"><strong>Password</strong></td>
            <td rowspan="2" class="third-row"><?php echo $password ?></td>
            <td class="forth-row"><strong>Deriverance</strong></td>
            <td class="forth-row"><?php echo $deriverance ?></td>
        </tr>
        <tr>
            <td class="first-row"><strong>Date</strong></td>
            <td class="first-row"><?php echo $date ?></td>
            <td class="forth-row"><strong>Message</strong></td>
            <td class="forth-row"><?php echo $message ?></td>
        </tr>
      </table>
    <?php
    }
    ?>
</body>
</html>