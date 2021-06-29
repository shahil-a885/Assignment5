<?php
include 'con_db.php';
if($_POST)
    {
        $acno  =$_POST['acno'];
    }
?>

<html>
<head>
    <title>ASSIGMENT 5</title>
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
<h1><u>WITHDRAW AMOUNT</u></h1>
        <form method="post" action="withdraw1.php">
    <table border="1" style="text-align:left;">
        <tr>
            <th colspan="2" style="text-align:center;"><u>WITHDRAW</u></th>
        </tr>
        <tr>
            <th>Acccount Number</th><th><input type="number" name="acno" readonly="" value="<?php echo $acno?>"></th>
        </tr>
        <tr>
            <th>Enter the amount to withdraw</th><th><input type="number" name="amt" ></th>
        </tr> 
        <tr>
            <th colspan="3" style="text-align:center"><input type="submit" name="del" value="WITHDRAW"></th>
        </tr> 
    </table>
</form>
    </center>
</body>
</html>
