<?php
function Connect() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname ="junkonnect";

    try
    {
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        return $conn;
    
        } catch (PDOException $ex){

            echo $error_alert =  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Could not connect to Database
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

            die();
        }
    
    }
    
    ?>