<?php
// require_once from a sever 
require_once "config.php";

$name = $type = $price = "";
$name_err = $type_err = $price_err = "";

// get request_method post 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // trim name; 
    $input_name = trim($_POST["name"]);

    // check varify 
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // trim and varify type 
    $input_type = trim($_POST["type"]);
    if(empty($input_type)){
        $type_err = "Please enter a type.";     
    } else{
        $type = $input_type;
    }
    
    // trim acd varify price 
    $input_price = trim($_POST["price"]);
    if(empty($input_price)){
        $price_err = "Please enter the price.";     
    } elseif(!ctype_digit($input_price)){
        $price_err = "Please enter a positive integer value.";
    } else{
        $price = $input_price;
    }
    
    // check erore 
    if(empty($name_err) && empty($type_err) && empty($price_err)){
        $sql = "INSERT INTO collectibles (name, type, price) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_type, $param_price);
            
            $param_name = $name;
            $param_type = $type;
            $param_price = $price;
            
            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Create Record</h2>
    <p>Fill the form to add your collectible to the database.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label><p>Name</p></label>
        <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
        <span><?php echo $name_err;?></span>
        <label><p>type</p></label>
        <textarea name="type" class="form-control <?php echo (!empty($type_err)) ? 'is-invalid' : ''; ?>"><?php echo $type; ?></textarea>
        <span><?php echo $type_err;?></span>
        <label><p>price</p></label>
        <input type="text" name="price" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $price; ?>">
        <span><?php echo $price_err;?></span>
        <p>
            <input type="submit" value="Submit">
            <a href="index.php">Cancel</a>
        </p>
    </form>
</body>
</html>