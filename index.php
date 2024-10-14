<!DOCTYPE html>
<?php include("Task.php") ; ?>

<html lang="en">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="UTF-8">
<head>
<style>
    body{
        font-family:  Georgia, serif;
    }
</style>

 
</head>


<body>

<div class="container mt-3">
<h2>1. Customers Table</h2>
<p>The Customers table stores the details of each customer:</p>         
  <table class="table table-hover">
    <thead>
      <tr>
<th>CustomerID</th>
<th>FirstName</th>
<th>LastName</th>
<th>Email</th>


      </tr>
    </thead>
    <tbody>

    <?php


$sql = "SELECT * FROM Customers";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     
    echo " <tr> ";
    echo  " <td>".$row["CustomerID"]."</td>";
    echo  " <td>".$row["FirstName"]."</td>";
    echo  " <td>".$row["LastName"]."</td>";
    echo  " <td>".$row["Email"]."</td>";
    echo " <tr> ";
    }
}

?>
      
    </tbody>
  </table>
</div>

<br>
<br>



<div class="container mt-3">
  <h2>2. Products Table</h2>
  <p>The Products table holds the details of each product being sold:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
<th>ProductID</th>
<th>ProductName</th>
<th>Price</th>



      </tr>
    </thead>
    <tbody>

    <?php


$sql = "SELECT * FROM Products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     
    echo " <tr> ";
    echo  " <td>".$row["ProductID"]."</td>";
    echo  " <td>".$row["ProductName"]."</td>";
    echo  " <td>".$row["Price"]."</td>";
    echo " <tr> ";
    }
}

?>
      
    </tbody>
  </table>
</div>





<br>
<br>



<div class="container mt-3">
  <h2>3. Invoices Table</h2>
  <p>The Invoices table stores details about each invoice, including the customer who placed the order and the product(s) being ordered:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
<th>InvoiceID</th>
<th>CustomerID</th>
<th>ProductID</th>
<th>InvoiceDate</th>
<th>Quantity</th>
<th>TotalAmount</th>
<th>PaymentStatus</th>




      </tr>
    </thead>
    <tbody>

    <?php


$sql = "SELECT * FROM Invoices";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     
    echo " <tr> ";
    echo  " <td>".$row["InvoiceID"]."</td>";
    echo  " <td>".$row["CustomerID"]."</td>";
    echo  " <td>".$row["ProductID"]."</td>";
    echo  " <td>".$row["InvoiceDate"]."</td>";
    echo  " <td>".$row["Quantity"]."</td>";
    echo  " <td>".$row["TotalAmount"]."</td>";
    echo  " <td>".$row["PaymentStatus"]."</td>";

    echo " <tr> ";
    }
}

?>
      
    </tbody>
  </table>
</div>



   
   
</body>
</html>



