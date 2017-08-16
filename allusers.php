<?php

        $dbParams = array (
		  'hostname' => 'localhost',
		  'username' => 'root',
		  'password' => '',
		  'database' => 'cvdatabase'
		);
		$mysqli = new mysqli($dbParams['hostname'], $dbParams['username'], $dbParams['password'], $dbParams['database']);
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		}	
        $query = "SELECT * FROM toplayer"; 
        $result = $mysqli->query($query);

        

       
?>

<table border ="1">
    
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>delete</th>
            <th>Edit</th>
            <th>Show</th>
        </tr>
    
        <?php while( $row = mysqli_fetch_array($result)) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['personID']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td> <form method="post" action="">
                <input type="hidden" name="delete_person_id" value="<?php echo $row['personID']; ?>">
                <button type="submit" name="delete_person">Delete</button></form> 
            </td>
            <td> <form method="get" action="adduserindex.php">
                <input type="hidden" name="email" value=<?php echo $row['email']; ?>>
                <input type="submit" value="Edit"> </form>
            </td>
            <td><form method="get" action="index.php">
                <input type="hidden" name="email" value=<?php echo $row['email']; ?>>
                <input type="submit" value="Show"> </form>
            </td>
        </tr>
        <?php endwhile ?>
   
</table>
<form action="adduserindex.php">
    <input type="submit" value="new user" />
</form> 


<?php
    if(isset($_POST['delete_person'])) 
    {
        $personid = strip_tags($_POST['delete_person_id']);
        $query = "delete  FROM toplayer where personID='$personid'";
        $result = $mysqli->query($query);
    }
     
?>

