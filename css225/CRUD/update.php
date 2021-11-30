<?php
require_once "config.php";
$name = $type = $price = "";
$name_err = $type_err = $price_err = "";
if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    $input_type = trim($_POST["type"]);
    if(empty($input_type)){
        $type_err = "Please enter a type.";     
    } else{
        $type = $input_type;
    }
    $input_price = trim($_POST["price"]);
    if(empty($input_price)){
        $price_err = "Please enter the price.";     
    } elseif(!ctype_digit($input_price)){
        $price_err = "Please enter a positive integer value.";
    } else{
        $price = $input_price;
    }

    if(empty($name_err) && empty($type_err) && empty($price_err)){
        $sql = "UPDATE collectibles SET name=?, type=?, price=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_type, $param_price, $param_id);
            $param_name = $name;
            $param_type = $type;
            $param_price = $price;
            $param_id = $id;
            
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
} else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id =  trim($_GET["id"]);
        
        $sql = "SELECT * FROM collectibles WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            $param_id = $id;
            
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    $name = $row["name"];
                    $type = $row["type"];
                    $price = $row["price"];
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
    }  else{
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 </head>
<body>
    <h2>Update Record</h2>
    <p>Please edit the input values and submit to update the record.</p>
    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
        <p><label>Name</label></p>
        <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
        <span><?php echo $name_err;?></span>
        <p><label>type</label></p>
        <textarea name="type" class="form-control <?php echo (!empty($type_err)) ? 'is-invalid' : ''; ?>"><?php echo $type; ?></textarea>
        <span><?php echo $type_err;?></span>
        <p><label>price</label></p>
        <input type="text" name="price" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $price; ?>">
        <span><?php echo $price_err;?></span>
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <input type="submit" value="Submit">
        <a href="index.php">Cancel</a>
    </form>
</body>
</html>