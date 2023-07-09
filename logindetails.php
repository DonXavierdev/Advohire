<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    class login{
        public function login_user($data){
            $name=$data['name'];
            $password=$data['password'];
            $query = "select * from users where name='$name'";
            $DB=new database();
            $result=$DB->read($query);
            if($result){
                $row=$result[0];
                
                if($password==$row['password']){
                    $_SESSION['userid']=$row['userid'];
                    header("Location:profile.php");
                    die;
                }
                else{
                    echo "wrong password";
                }
            }
            else{
                echo "No such user";
            }
        }
       
    }
    $call = new login();
    $call->login_user($_POST);   
}
?>