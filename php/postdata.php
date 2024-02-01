<?php

    function postData($firstName, $lastName, $email, $telephone, $message)
    {
        include("dbConnection.php");

        try {
            $sql = $conn->prepare('
                INSERT INTO enquiries (first_name, last_name, email, telephone, message)
                VALUES (:first_name, :last_name, :email, :telephone, :message);
            ');

            $sql->bindValue(":first_name", $firstName, PDO::PARAM_STR);
            $sql->bindValue(":last_name", $lastName, PDO::PARAM_STR);
            $sql->bindValue(":email", $email, PDO::PARAM_STR);
            $sql->bindValue(":telephone", $telephone, PDO::PARAM_STR);
            $sql->bindValue(":message", $message, PDO::PARAM_STR);

            $sql->execute();
            return true;
        }
        catch (PDOException $pe)
        {
            echo 'Unable to send data ' . $pe->getMessage();
            exit;
        }
    }

?>