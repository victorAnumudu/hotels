
<?php 
    if(isset($_POST['signup'])){
        foreach($_POST as $key => $value){
            $value = is_array($value) ? $value : trim($value);
            if(empty($value)) {
                $missing[] = $key;
                $$key = '';
            }else{
                $$key = $value;
            }
        }
        
        // handing the passport file
        $passport = $username . "_" . $_FILES['passport']['name'];
        // $passport_path = url_for("/dashboard/upload/") . basename($passport);
        $passport_path = "../dashboard/upload/" . basename($passport);
        $passport_tmp = $_FILES['passport']['tmp_name'];
             

        if($passport == "") {
            $missing[] = "passport";
        }

        // proceeding if no elements exist in missing array
        if(!$missing && !$error) {
            
            // Declare a regular expression for phone number
            $regex_contact = '/[0-9]{11}/';
            
            if(!preg_match($regex_contact, $contact)) { // if it fails
                $error[] = "contact";
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { // if emails fails to validate
                $error[] = "email";
            }
            if ($password != $repeat_password) { // if password do not match
                $error[] = "passwordDontMatch";
            }
            if (strlen($password) <= 7) { // if password is not upto 8 characters
                $error[] = "passwordTooSmall";
            }
            else { // run connection to database
                require "db_connection.php";
                if($connection->connect_error) { // check if db connection fails
                    header("location: " . url_for("/pages/signup.php?error=servererror"));
                }
                else {
                    //checking for existing contact
                    $stmt = $connection->prepare("SELECT contact FROM customers WHERE contact=?");
                    $stmt->bind_param("s", $contact);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                    
                    if($result->num_rows > 0) {
                        $error[] = "contactTaken";
                    }

                    //checking for existing email
                    $stmt = $connection->prepare("SELECT email FROM customers WHERE email=?");
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                    
                    if($result->num_rows > 0) {
                        $error[] = "emailTaken";
                    }

                    //checking for existing username
                    $stmt = $connection->prepare("SELECT user_name FROM customers WHERE user_name=?");
                    $stmt->bind_param("s", $username);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $stmt->close();
                    
                    if($result->num_rows > 0) {
                        $error[] = "usernameTaken";
                    }
                    else {
                        $new_password = password_hash($password, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO customers ";
                        $sql .= "(first_name, last_name, contact, email, user_name, password, passport) ";
                        $sql .= "VALUES (?, ?, ?, ?, ?, ?, ?)";
                        $stmt = $connection->prepare($sql);
                        $stmt->bind_param("sssssss", $firstname, $lastname, $contact, $email, $username, $new_password, $passport);
                        
                        if($stmt->execute()){
                            if(!move_uploaded_file($passport_tmp, $passport_path)){ // if fails to upload delete user details from database
                                $stmt = $connection->prepare("DELETE from customers WHERE user_name=?");
                                $stmt->bind_param("s", $username);
                                $stmt->execute();
                                $stmt->close();
                                header("location: " . url_for("/pages/signup.php?error=registrationfailed"));
                            }

                            //checking if user exist
                            $stmt = $connection->prepare("SELECT * FROM customers WHERE user_name=?");
                            $stmt->bind_param("s", $username);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $stmt->close();
                            $record = $result->fetch_assoc();
                            // redirect to dashboard if upload is successful
                            session_start();
                            $_SESSION['username'] = $username;
                            $_SESSION['id'] = $record['id'];
                            header("location: " . url_for("/dashboard/index.php"));
                            
                        }
                        $stmt->close();
                    }
                }

                $connection->close();
            }
        }
    }
?>