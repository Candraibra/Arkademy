<?php
if(isset($_POST['submit'])){
    function validate($value, $name){
        if($name == 'username'){
            return $username = strtolower($_POST['username']);
        }
        if($name == 'email'){
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                return $email = strtolower($_POST['email']);
            }
            else{
                return 'email not valid, value : '.$_POST['email'];
            }
        }
        if($name="phone"){
            if(filter_var($_POST['phone'], FILTER_VALIDATE_INT)){
                return $phone = $_POST['phone'];
            }
            else{
                return 'phone not valid, value : '.$_POST['phone'];
            }
        }
    }
    $username = validate($_POST['username'],'username');
    $email = validate($_POST['email'],'email');
    $phone = validate($_POST['phone'],'phone');
}
?>