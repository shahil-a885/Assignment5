<?php 
    include 'con_db.php';
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
        <form method="post" enctype="multipart/form-data">
    <table border="1" style="text-align:left;">
        <tr>
            <th colspan="2" style="text-align:center;">BANK FORM</th>
        </tr>
        <tr>
            <th>Enter Account Number</th><th><input type="text" name="acno"></th>
        </tr>
        <tr>
            <th>Enter Customer Name</th><th><input type="text" name="name"></th>
        </tr>
        <tr>
            <th>Enter Address</th><th><textarea name="addr"></textarea></th>
        </tr>
        <tr>
            <th>Enter Account Type</th><th><input type="text" name="type"></th>
        </tr>
        <tr>
            <th>Enter Balance</th><th><input type="number" name="balance"></th>
        </tr> 
        <tr>
            <th colspan="3" style="text-align:center"><input type="submit" name="submit" value="CREATE"></th>
        </tr> 
    </table>
</form>
    </center>
<?php
if(isset ($_POST["submit"]))
{
$acno = $_POST['acno'];
$name = $_POST['name'];
$addr = $_POST['addr'];
$type = $_POST['type'];
$bal = $_POST['balance'];
if($bal>=500)
{
$sql = mysqli_query($con,"INSERT INTO customer VALUES('$acno','$name','$addr','$type','$bal')");
if($sql)
                    {
                        echo '<script>alert("Data Added Successfully");window.location="viewbank.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}
else
{
  echo '<script>alert("Minimum balance should be 900");window.location="bank.php"</script>';  
}
}
?>
</body>
</html>