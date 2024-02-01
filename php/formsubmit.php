<?php
    // session_start();

    // include("php/dbconnection.php");
    // include("php/postdata.php");

    // $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0'; // Not currently in use
    
    // if (!isset($_SESSION['success']))
    // {
    //     $_SESSION['success'] = false;
    // }
    
    // if (!isset($_SESSION['errorMessage']))
    // {
    //     $_SESSION['errorMessage'] = [];
    // }
    
    // function sanatiseInput($input)
    // {
    //     $input = htmlspecialchars($input);
    //     $input = trim($input);
    //     $input = stripslashes($input);
    //     return $input;
    // }

    // function validateInput($postData, $input, $regex=true)
    // {
    //     if (empty($postData) == true)
    //     {
    //         array_push($_SESSION['errorMessage'], "Please enter a value into " . $input . ".");
    //         return false;
    //     }
    //     else if ($regex == false)
    //     {
    //         array_push($_SESSION['errorMessage'], "The " . $input . " format is incorrect.");
    //         return false;
    //     }
    //     else
    //     {
    //         return true;
    //     }
        
    // }

    // if ($_SERVER["REQUEST_METHOD"] == "POST")
    // {
    //     // Filering / Sanitising all inputs and storing the values into session variables

    //     $firstName = sanatiseInput($_POST['first_name']);
    //     $_SESSION['first_name'] = $firstName;

    //     $lastName = sanatiseInput($_POST['last_name']);
    //     $_SESSION['last_name'] = $lastName;

    //     $email = sanatiseInput($_POST['email']);
    //     $_SESSION['email'] = $email;

    //     $telephone = sanatiseInput($_POST['telephone']);
    //     $_SESSION['telephone'] = $telephone;

    //     $message = sanatiseInput($_POST['message']);
    //     $_SESSION['message'] = $message;
        
        

 
    //     $nameRegex = "/^[a-zA-Z-' ]*$/";
    //     $phoneRegex = "/^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/";

    //     //function validateInput($postData, $input, $regex=true)
    //     $isFirstNameValid = validateInput($firstName, "first_name", preg_match($nameRegex, $firstName));
    //     $isLastNameValid = validateInput($lastName, "last_name", preg_match($nameRegex, $lastName));
    //     $isEmailValid = validateInput($email, "email", filter_var($email, FILTER_VALIDATE_EMAIL));
    //     //$isPhoneValid = validateInput($telephone, "telephone", preg_match($phoneRegex, $telephone));
    //     //$isMessageValid = validateInput($message, "message");

    //     if ($isFirstNameValid && $isLastNameValid && $isEmailValid) //  && $isPhoneValid && $isMessageValid
    //     {
    //         postData($firstName, $lastName, $email, $telephone, $message, $marketing);

    //         unset($_SESSION['first_name']);
    //         unset($_SESSION['last_name']);
    //         unset($_SESSION['email']);
    //         unset($_SESSION['telephone']);
    //         unset($_SESSION['message']);

    //         $_SESSION['success'] = true;
    //         $_SESSION['errorMessage'] = [];

    //         $_SESSION['form_sent'] = true;
            
    

    //         echo 'Data submitted to the Database Successfully';
    //         header("Location: index.php#contact");
        
    //         exit();

    //     }
    //     else
    //     {
    //         $_SESSION['form_sent'] = false;
    //         header("Location: index.php#contact");

    //         exit();
    //     }
        
        
        






    // }


?>