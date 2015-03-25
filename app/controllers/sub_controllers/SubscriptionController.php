<?php
require_once 'app/controllers/sub_controllers/DatabaseController.php';
require_once 'includes/PHPMailerAutoload.php';

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
  
  private static function email($email, $subject, $htmlContent, $textContent) {
    $mail = new PHPMailer;
    
    $mail->setFrom('no-reply@stmarysnurseryandgardencentre.ca', 'StMarys Nursery and Garden Centre LTD.');
    $mail->addAddress($email);
    
    $mail->Subject = $subject;
    $mail->msgHTML($htmlContent);
    $mail->AltBody = $textContent;
    $mail->WordWrap = 80;
    $mail->isHTML(true);
    $mail->CharSet="text/html; charset=UTF-8";
    
    $mail->send();
  }
  
  private static function sendSubscribed($fName, $email) {  
    $subject = "Subscription Successfull";
    $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                 <head>
                  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                  <title>StMarys Nursery & Garden Centre Newsletter</title>
                  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                </head>
                <body style="margin: 0; padding: 0;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                    <tr>
                      <td align="center" bgcolor="#124b90" style="padding: 40px 0 30px 0;">
                        <img src="http://50.71.84.193/static/img/StMarys-Logo_White-Text.png" alt="Creating Email Magic" width="400" style="display: block;" />
                      </td>
                    </tr>
                    <tr>
                      <td bgcolor="#ffffff" style="text-align: center; padding: 40px 30px 40px 30px;"> <!-- Content Start -->
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tr>
                            <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px; padding: 20px 0 30px 0;">     
                              '.$fName.', Thank you for subscribing to your newsletter  
                            </td>
                          </tr>
                          <tr>
                            <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px;">     
                              You have been successfully added to our mailing list, keeping you up-to-date with our latest news.
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td bgcolor="#124b90" style="padding: 30px 30px 30px 30px">
                         <table border="0" cellpadding="0" cellspacing="0" width="100%">
                           <tr>
                             <td style="color: #eee;" width="75%">
                               &reg; St.Marys Nursery &amp; Garden Centre LTD<br/>
                               Winnipeg, MB, 2015<br/>
                               <a style="color: #fff;"href="http://50.71.84.193/api/Subscription/unsubscribe/'.$email.'">Unsubscribe</a> to this newsletter.
                             </td>
                             <td align="right">
                               <table border="0" cellpadding="2" cellspacing="0">
                                 <tr style="margin-bottom: 15px;">
                                   <td>
                                     <a href="https://www.facebook.com/pages/St-Marys-Nursery-and-Garden-Centre-Ltd/128776243867073">
                                       <img src="http://50.71.84.193/static/img/Facebook-Badge-White.png" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                                     </a>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td style="font-size: 0; line-height: 0;" width="20">
                                     <a href="https://twitter.com/StMarysNursery">
                                       <img src="http://50.71.84.193/static/img/Twitter-Badge-White.png" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
                                     </a>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td style="font-size: 0; line-height: 0;" width="20">
                                     <a href="http://instagram.com/stmarysnursery?ref=badge">
                                       <img src="http://50.71.84.193/static/img/Instagram-Badge-White.png" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
                                     </a>
                                   </td>
                                 </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                  </table>
                </body>
                </html>';
    $textContent = $fName.', Thank you for subscribing. You have been successfully added to our mailing list, keeping you up-to-date with our latest news.';
    self::email($email, $subject, $htmlContent, $textContent);
  }
  
  public static function subscribe() {
    $conn = self::getConnection();
    if($conn->connect_error) 
      die( mysqli_errno($conn) );
    
    $fName = $_POST['iFName'];
    $lName = $_POST['iLName'];
    $email = $_POST['iEmail'];
       
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
      echo json_encode(array('success' => 0, 'result' => 'Invalid Email'));
      mysqli_close($conn);
      return;
    }
    
    $sql = sprintf('INSERT INTO %s ( fName, lName, email ) VALUES ( "%s", "%s", "%s" )',
        self::TABLE_NAME,
        $fName,
        $lName,
        mysqli_real_escape_string($conn, $email));
      
    if(self::checkEmail($conn, $email) == true) {
      $resp = mysqli_query($conn, $sql) or
              die( mysqli_errno($conn));
      echo json_encode(array('success' => 1, 'redirect' => 1, 'result' => "Added"));
      
      //self::sendSubscribed($fName, $email);
    }
    else {
      echo json_encode(array('success' => 0, 'redirect' => 0, 'result' => "Email already subscribed"));
    }
    
    mysqli_close($conn);
  }
  
  public static function Unsubscribe($params) {
    $conn = self::getConnection();
    if($conn->connect_error) 
      die( mysqli_errno($conn) );
    
    $email = $params['param1'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
      echo json_encode(array('success' => 0, 'result' => 'Invalid Email'));
      mysqli_close($conn);
      return;
    }
    
    $sql = sprintf("DELETE FROM %s WHERE %s.email = '%s'",
        self::TABLE_NAME,
        self::TABLE_NAME,
        mysqli_real_escape_string($conn, $email));
    
    if(self::checkEmail($conn, $email) == false) {
      $resp = mysqli_query($conn, $sql) or
        die( mysqli_errno($conn));
      echo json_encode(array('success' => 1, 'redirect' => 1, 'result' => "Removed"));
    }
    else {
      echo json_encode(array('success' => 0, 'redirect' => 0, 'result' => "Email not found"));
    }
    mysqli_close($conn);
  }
  
  public static function send() {
    $conn = self::getConnection();
    if($conn->connect_error)
      die( mysqli_errno($conn) );
    
    $sql = "SELECT email FROM ".self::TABLE_NAME;
    $result = mysqli_query($conn, $sql)
              or die(mysqli_error($conn));
    
    $mailheaders = "From: St.Marys Nursery & Garden Centre <no-reply@stmarysnursery.com>";
    
    while($row = mysqli_fetch_array($result)) {
      set_time_limit(0);
      $email = $row['email'];
      if(!mail($email, 
           'Test Newsletter',
           'Test Content',
           $mailheaders,
           "-fwebmaster@example.com")) {
        print_r(error_get_last());
      }
      echo "newsletter sent to: ".$email."<br/>";
    }
    phpinfo();
    mysqli_free_result($result);
    mysqli_close($conn);
    echo "Done";
    //create a From: mailheader
  }
}

?>