<?php
include 'con_db.php';
if($_POST)
    {
        $acno  =$_POST['acno'];
        $q =mysqli_query($con, "select * from customer WHERE acno = $acno ");
        $row=mysqli_fetch_array($q);
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
<body style="background-color: lightblue;color:red;">
    <center>
<h1><u>BALANCE INFO:</u></h1>
        <form method="post" action="depos.php">
    <table border="1" style="text-align:left;">
        <tr>
            <th colspan="2" style="text-align:center;">BALANCE</th>
        </tr>
        <tr>
            <th>Acccount Number</th><th><input type="number" name="acno" readonly="" value="<?php echo $acno?>"></th>
        </tr>
        <tr>
            <th>Balance</th><th><input type="number" name="amt" readonly="" value="<?php echo $row['balance']?>"></th>
        </tr> 
        <tr>
            <th colspan="3" style="text-align:center"><a href="bank.php" class="btn btn-light" data-placement="top" title="Edit">
                                                            <i class="fa fa-edit"> Back</i>
                                                        </a></th>
        </tr> 
    </table>
</form>
    </center>
</body>
</html>
