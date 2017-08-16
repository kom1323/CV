<?php

    if (!empty($_GET)){
           $var_email = $_GET['email'];
       
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
        $query = "SELECT * FROM toplayer where email ='$var_email'"; 
        $result = $mysqli->query($query);  
        $row = mysqli_fetch_array($result);
        
    }
         
     
            if (isset($_POST) && !empty($_POST)){
                    $validated = true;
                    if (empty($_POST['first_name'])) {
                        $errs[] = "First name is empty";
                        $validated = false;
                    }
                    if (empty($_POST['last_name'])) {
                        $errs[] = "Last name is empty";
                        $validated = false;
                    }
                    if (empty($_POST['title'])) {
                        $errs[] = "title is empty";
                        $validated = false;
                    }
                    if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_POST['phone_number'])) {
                        $errs[] = "Phone number should look like this 000-000-0000";
                        $validated = false;
                    }
                    if (empty($_POST['address'])) {
                        $errs[] = "address is empty";
                        $validated = false;
                    }
                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $errs[] = "Email should be an email";
                        $validated = false;
                    }

                    if ($validated){
                        // insert line to db
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
                        
                        
                        
                     
                            
                            
                         $personid = $row['personID'];//delete prev 
                         $query = "delete  FROM toplayer where personID='$personid'";
                         $result = $mysqli->query($query);
                           

                      


                        $values = array($_POST['first_name'], 
                                        $_POST['last_name'],
                                        $_POST['title'],
                                        $_POST['phone_number'],
                                        $_POST['address'],
                                        $_POST['email']);
                        $query = vsprintf('insert into toplayer (firstname,lastname,title,phone,address,email) values("%s","%s","%s","%s","%s","%s")',$values);

                        

                        $res=mysqli_query($mysqli,$query);

                        if ($res)
                            echo "Owner Added<br/>";
                        else
                            echo "Owner not Added<br/>";
                    }
                    if (isset($errs)){
                        foreach ($errs as $err){
                            echo "$err <br/>";
                        }
                    }




                }
 
               


?>