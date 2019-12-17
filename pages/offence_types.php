<?php 
include '../includes/connection.php';
$sql = "SELECT `offence_types`.`otID` AS id,`offence_types`.`offenceName` AS o_name, `offence_categories`.`catName` 
AS category
FROM offence_types INNER JOIN offence_categories ON offence_categories.`ocID` = offence_types.`categoryID`
ORDER BY offence_categories.`ocID`;";
$result = $link->query($sql);

if ($result->num_rows > 0) {	
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        ?>
<option class="form-control" value="<?php echo $row["id"]; ?>"><?php echo $row["category"]." - ".$row["o_name"]; ?>
</option>

<?php
    }
} else {
    echo "0 results";
}

 ?>