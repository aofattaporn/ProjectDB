<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Your Collectibles</h2>
    <a href="create.php"> <p>Add New collectible</p></a>
    <?php
        require_once "config.php"; 
        $sql = "SELECT * FROM collectibles"; 
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo '<table>';
                echo "<thead>";
                    echo "<tr>"; 
                    echo "<th>#</th>"; 
                    echo "<th>Name</th>"; 
                    echo "<th>Type</th>"; 
                    echo "<th>Price</th>"; 
                    echo "<th>Action</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>"; 
                        echo "<td>" . $row['name'] . "</td>"; 
                        echo "<td>" . $row['type'] . "</td>"; 
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>";
                        echo '<a href="read.php?id=' . $row['id'] .'" <span>View</span></a>';
                        echo '<a href="update.php?id='. $row['id'] .'"<span>Update</span></a>';
                        echo '<a href="delete.php?id='. $row['id'] .'"<span>Delete</span></a>';
                        echo "</td>";
                        echo "</tr>";
                    }
                 echo "</tbody>";                            
                 echo "</table>";
                 mysqli_free_result($result); // Free result set
           } else{
                 echo "No records were found.";
              }
           } else{
                 echo "Something went wrong. Please try again.";
           }
        mysqli_close($link); 
    ?>
</body>
</html>
