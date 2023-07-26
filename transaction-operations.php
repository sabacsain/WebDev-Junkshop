<?php
require 'connection.php';
$connect = Connect();

try{
    if (isset($_POST['add-to-form']) or isset($_POST['update-record'])){
        $transaction_id =  $_POST['transactionID_input'];
        $user_id =  $_POST['userID_input'];
        $product_name = $_POST['product_name_input'];
        $type_of_junk = $_POST['type_of_junk_input'];
        $description = $_POST['description_input'];
        $estimated_weight = $_POST['estimated_weight_input'];
        $img_path = $_POST['img_path_input'];
        $price = $_POST['price_input'];
        $date_of_pickup = $_POST['date_of_pickup_input'];
        $status = $_POST['status_input'];


        $data = [
            'transaction_id' => $transaction_id,
            'user_id' => $user_id,
            'product_name' => $product_name,
            'type_of_junk' => $type_of_junk,
            'description_' => $description,
            'estimated_weight' => $estimated_weight,
            'img_path' => $img_path,
            'price' => $price,
            'date_of_pickup' => $date_of_pickup,
            'status_' => $status,
        ];

    }

    if(isset($_POST['add-to-form'])){

        try{
            $query = "INSERT INTO `transaction` (`TRANSACTION_ID`, `USER_ID`, `PRODUCT_NAME`, `TYPE_OF_JUNK`, `IMG_PATH`, `DESCRIPTION`, `ESTIMATED_WEIGHT`, `PRICE`, `DATE_OF_PICKUP`, `STATUS`) VALUES 
            (:transaction_id, :user_id,  :product_name, :type_of_junk, :description_, :estimated_weight, :img_path, :price, :date_of_pickup, :status_ )";
            $stmt = $connect->prepare($query);
            $stmt -> execute($data);

            echo $success_alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Record Has Been Added Succesfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
                
            <a href="admin-transaction.php" class="proceed-btn"><button type="button" class="btn btn-outline-dark ">Go Back to Admin </button></a>';
        }
        
        catch (PDOException $e){        
            echo $error_alert =  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> 
            <br>
            <hr>
            '.$e->getMessage().'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
        }
    

       
    }
    else if(isset($_POST['update-record'])){
        try{
            $query = "UPDATE `transaction` SET 
            USER_ID = :user_id,
            PRODUCT_NAME =:product_name,
            TYPE_OF_JUNK =:type_of_junk,
            `DESCRIPTION` =:description_,
            ESTIMATED_WEIGHT =:estimated_weight,
            IMG_PATH =:img_path,
            PRICE =:price,
            DATE_OF_PICKUP =:date_of_pickup,
            `STATUS` =:status_
            WHERE TRANSACTION_ID = :transaction_id;
            ";

            $stmt = $connect->prepare($query);
            $stmt -> execute($data);
            echo $success_alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Record Has Been Updated Succesfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
                
            <a href="admin-transaction.php" class="proceed-btn"><button type="button" class="btn btn-outline-dark ">Go Back to Admin </button></a>';

        }catch(PDOException $e){
            echo $error_alert =  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> 
            <br>
            <hr>
            '.$e->getMessage().'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
        }

    }

    else if(isset($_POST['delete-record'])){
        $transaction_id =  $_POST['transactionID_input'];
        try{
            $query="DELETE FROM `transaction` WHERE TRANSACTION_ID=?";
            $stmt= $connect->prepare($query);
            $stmt->execute([$transaction_id]);

            echo $success_alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Record Has Been Deleted Succesfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
                
            <a href="admin-transaction.php" class="proceed-btn"><button type="button" class="btn btn-outline-dark ">Go Back to Admin </button></a>';

        }catch(PDOException $e){
            echo $error_alert =  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> 
            <br>
            <hr>
            '.$e->getMessage().'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
        }

    }


}catch (Throwable $e){
    $e->getMessage();
}

?>