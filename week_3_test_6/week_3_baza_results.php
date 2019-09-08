<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySql Results</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 2px;
            float: left;
        }
        th, td {
            padding: 5px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
    try {
        $dbhost = 'localhost';
        $username = 'root';
        $pass = '';
        $dbname = 'glassesRus';
       

        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;",$username, $pass);
        //echo "ook";


        // customers  table
        $query = "SELECT * FROM customers";
        $data = $conn->prepare($query);
        $data->execute();
        
        echo "<table><tr><th>Id</th><th>Title</th><th>Surname</th><th>Firstname</th></tr>";
        foreach ($data as $row) {
            echo "<tr>
                    <td>{$row['Id']}</td>
                    <td>{$row['Title']}</td>
                    <td>{$row['Surname']}</td>
                    <td>{$row['Firstname']}</td>
                </tr>";
        }
        echo "</table>";
       
       
        // table of purchases
        $query = "SELECT * FROM purchases";
        $data = $conn->prepare($query);
        $data->execute();
        
        echo "<table><tr><th>Id</th><th>Customers_Id</th><th>Day</th><th>Month</th><th>Year</th></tr>";
        foreach ($data as $row) {
            echo "<tr>
                    <td>{$row['Id']}</td>
                    <td>{$row['Customers_Id']}</td>
                    <td>{$row['Day']}</td>
                    <td>{$row['Month']}</td>
                    <td>{$row['Year']}</td>
                </tr>";
        }
        echo "</table>";
       

        // table of products
        $query = "SELECT * FROM products";
        $data = $conn->prepare($query);
        $data->execute();
       
        echo "<table><tr><th>Name</th><th>Description</th><th>Quantity</th><th>Cost</th></tr>";
        foreach ($data as $row) {
            echo "<tr>
                    <td>{$row['Name']}</td>
                    <td>{$row['Description']}</td>
                    <td>{$row['Quantity']}</td>
                    <td>{$row['Cost']}</td>
                </tr>";
        }
        echo "</table>";
       
        // table of purchaseproducts
        $query = "SELECT * FROM purchaseproducts";
        $data = $conn->prepare($query);
        $data->execute();

        echo "<table><tr><th>products_Id</th><th>purchases_Id</th><th>Quantity</th><th>Cost</th></tr>";
        foreach ($data as $row) {
            echo "<tr>
                    <td>{$row['products_Id']}</td>
                    <td>{$row['purchases_Id']}</td>
                    <td>{$row['Quantity']}</td>
                    <td>{$row['Cost']}</td>
                </tr>";
        }
        echo "</table>";

    } catch (PDOException $e) {
        echo "Error  !!".$e->getMessage()."<br>";

    }
?>
    
</body>
</html>