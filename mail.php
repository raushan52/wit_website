
<?php

    $name = $email = $phone = $country = $query = $body =  '';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $query = $_POST['query'];
    $body = $_POST['attachment'];
   



    $to = 'sales@witarist.com';
    $subject = 'Enquiry Form Submit';
  
   
   
    $message = "From : "."  \r\n" ."  \r\n" . "Name : " . $name."  \r\n" . "Email : ". $email."  \r\n" . "Contact Number :  ". $phone ."\r\n" . "Country :  ". $country ."\r\n" . "Query :  ". $query ."\r\n" . "Attachment :  ". $body ."\r\n"; 

   

    if (mail($to, $subject, $message)){       
        $name = $email = $phone = $country = $query = $body =  '';
        echo "Thank you for submitting your response. We will get back to you in 24 hours.";
        header("Location: index.html");
       
    }
    


  
    ?>

