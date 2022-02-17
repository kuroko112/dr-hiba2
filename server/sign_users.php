
<?php 


    /* 
     1 - Push all data from form sign up users
     2 - and check if the user is exist in database
     3 - and push the error -> [ message errors and show the message  ]    
    */





    session_start();
    // include the file configration
    include_once('confg.php');
    
   


    // This inti Var and save the data -> POST  
    $error              = [];
    $name               = $_POST['name'];
    $email              = $_POST['email'];
    $phone              = $_POST['phone'];
    $password           = $_POST['password'];
    $repeat_password    = $_POST['repeat-password'];
    

    if(empty($email)) {
        $error[] = "البريد الالكتروني فارغ"; 
    }

    if(empty($phone)) {
        $error[] = "الهاتف فارغ";
    }

    if(empty($name)) {
        $error[] = "الاسم فارغ";
    }

    if(empty($password)) {
        $error[] = "كلمة السر فارغه";
    }

    

    


?>