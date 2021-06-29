<?php
include 'con_db.php';
if($_POST)
    {
        $acno  =$_POST['acno'];
    }
?>

<html>
<head>
    <title>ASSIGNMENT 5</title>
    <style type="text/css">
        p {
color:white;
font-size:50px;
position: absolute;
top: 20%;
left: 40%;
transform: translate(-50%, -50%);
}
    </style>
</head>
<body style="background-color: lightblue;color: red;">
    <center>
<h1><u>DEPOSIT</u></h1>
        <form method="post" action="depos.php">
    <table border="1" style="text-align:left;">
        <tr>
            <th colspan="2" style="text-align:center;">DEPOSIT</th>
        </tr>
        <tr>
            <th>Acccount Number</th><th><input type="number" name="acno" readonly="" value="<?php echo $acno?>"></th>
        </tr>
        <tr>
            <th>Enter the amount to deposit</th><th><input type="number" name="amt" ></th>
        </tr> 
        <tr>
            <th colspan="3" style="text-align:center"><input type="submit" name="add" value="DEPOSIT"></th>
        </tr> 
    </table>
</form>
    </center>
</body>
</html>
