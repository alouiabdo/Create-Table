<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect Database</title>
    <link rel="stylesheet" href="Create-Table.css">
</head>
<body>
    <h1>PHP Create a MySQL Database</h1>
    <form  method="POST" action="" >
    <label for="">TableName :</label>
    <input type="text" name="TableName" ><br>
    <label for="">Column 1 :</label>
    <input type="text" name="Column1" ><br>
    <label for="">Column 2 :</label>
    <input type="text" name="Column2"><br>
    <label for="">Column 3 :</label>
    <input type="text" name="Column3"><br>
    <label for="">Column 4 :</label>
    <input type="text" name="Column4"><br>
    <label for="">Column 5 :</label>
    <input type="text" name="Column5"><br>
    <input type="submit" name="sub" id="he" value="Create Table"><br>
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){ 
        $table_name =$_POST["TableName"];
        $column1 = $_POST["Column1"];
        $column2 = $_POST["Column2"];
        $column3 = $_POST["Column4"];
        $column4 = $_POST["Column5"];
        $column5 = $_POST["Column3"];
        $servername="localhost";
        $username= "root";
        $password= "";
        try{
            $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
            $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            $sql = "CREATE TABLE $table_name(
                    id INT UNSIGNED PRIMARY KEY,
                    $column1 VARCHAR(30) NOT NULL,
                    $column2 VARCHAR(30) NOT NULL,
                    $column3 VARCHAR(30) NOT NULL,
                    $column4 VARCHAR(30) NOT NULL,
                    $column5 VARCHAR(30) NOT NULL )";
            $conn -> exec($sql);

            echo"<h4 style='
            color: rgb(134, 196, 148);
        '>Table MyGuests created successfully</h4>";
        }catch(PDOException $e){
            echo"<p  style='
            color: red;
        '> not created</p>";
        }
}
?>
<!-- <h4 class='text'>Database created successfully</h4> -->
</body>
</html>