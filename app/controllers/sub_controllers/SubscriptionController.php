<?php
require_once 'app/controllers/sub_controllers/DatabaseController.php';

class SubscriptionController extends DatabaseController {
  CONST TABLE_NAME = 'Subscription';
  
  private static function checkEmail($conn, $email) {
    $safe_email = mysqli_real_escape_string($conn, $email);
    $sql = 'SELECT id FROM '.self::TABLE_NAME.' WHERE email = "'.$safe_email.'"';
    $result = mysqli_query($conn, $sql)
              or die(mysqli_error($conn));
    if(mysqli_num_rows($result) < 1)
      return true;
    else
      return false;
  }
  
  public static function subscribe() {
    $conn = self::getConnection();
    if($conn->connect_error) 
      die( mysqli_errno($conn) );
    
    //$email = $_POST['email'];
    $email = 'cam.hrycyna2gmail.com';
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) )
    {
      return json_encode(array('success' => 0, 'result' => 'Invalid Email'));
    }
    
    $sql = sprintf('INSERT INTO %s ( email ) VALUES ( "%s" )',
        self::TABLE_NAME,
        mysqli_real_escape_string($conn, $email));
      
    if(self::checkEmail($conn, $email) == true) {   
      
      $resp = mysqli_query($conn, $sql) or
              die( mysqli_errno($conn));
      var_dump( $resp );
      
    }
    else
    {
      return json_encode(array('success' => 0, 'result' => 'Already Subscribed'));
    }
    
    mysqli_close($conn);
  }
  
  public static function Unsubscribe() {
    echo "Unsubscrible";
  }
}

?>