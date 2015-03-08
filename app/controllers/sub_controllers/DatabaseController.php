<?php

class DatabaseController {
  const SERVER_NAME = "sql5c11b.megasqlservers.com";
  const USERNAME    = "stmarysnur653773";
  const PASSWORD    = "2901Stm4rys";
  const DATABASE    = "phpmy1_stmarysnurseryandgardencentre_ca";
  
  private static function getConnection() {  
    return new mysqli(self::SERVER_NAME, self::USERNAME, self::PASSWORD, self::DATABASE);
  }
  
  public static function testConnection() {
    self::getUser("cameron.hrycyna@gmail.com");
  }
  
  protected static function INSERT() {
    
  }
  
  protected static function SELECT() {
    
  }
  
  protected static function DELETE() {
    
    
  }
  private static function getUser($user) {
    $connection = self::getConnection();
    
    if($connection->connect_error) {
      die();
    }
    
    $sql = "SELECT * FROM Users WHERE email='". $user."'";   
    
    if($result = mysqli_query($connection, $sql)) {
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
          echo $row['email'];
          echo $row['f_name'];
          echo $row['l_name'];
        }
      } 
      else
      {
        echo "No records matching your query were found.";
      }
    } 
    else
    {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
  }
}

?>