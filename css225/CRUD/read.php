<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    require_once "config.php";
    $sql = "SELECT * FROM collectibles WHERE id = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = trim($_GET["id"]);
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $name = $row["name"];
                $address = $row["type"];
                $salary = $row["price"];
            } else{
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Something went wrong. Please try again later.";
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else{
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>View Record</h1>
    <label>Name</label>
    <p><b><?php echo $row["name"]; ?></b></p>
    <label>Type</label>
    <p><b><?php echo $row["type"]; ?></b></p>
    <label>Salary</label>
    <p><b><?php echo $row["price"]; ?></b></p>
    <p><a href="index.php">Back</a></p>
</body>
</html>
