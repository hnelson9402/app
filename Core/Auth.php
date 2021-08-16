<?php

namespace Core;

use Config\Server;

class Auth{    

    /*========validate if the user is logged in===========*/
    public static function accessLogin(){
        if (isset($_SESSION['status'])) {
            return header("location: ".Server::SERVER."main/");
        }
    }
    
    /*========validate if the user is not logged in===========*/
    public static function accessMain(){
        if (!isset($_SESSION['status'])) {
            return header("location: ".Server::SERVER."");
        }  
    }

    /*=====================validate if the user has privileges===================*/
    // public static function userPrivilege(){
    //     if (isset($_GET['route'])) {
    //         $route = explode("/",$_GET['route']);
    //         $privilege = $_SESSION['user']['privilegio_usuario'];
            
    //         if ($route[0] == "user" && $privilege > 1) {
    //             echo "<script>window.location.href='".Server::SERVER."main/'</script>";               
    //         }else if($route[0] == "group" && $privilege > 2){
    //             echo "<script>window.location.href='".Server::SERVER."main/'</script>";
    //         }        
    //     }
    // } 

    /*===========================Change Script Dynamic==================================*/
    public static function changeScript(){
        if (isset($_GET['route'])) {
            $route = explode("/",$_GET['route']);
            
            if ($route[0] == "user") {
                echo "<script src='".Server::SERVER."Views/user/user.js'  type='module'></script>";               
            }      
        }
    }

    // public static function efectHover(){
    //     if (isset($_GET['route'])) {
    //         $route = explode("/",$_GET['route']);
            
    //         if($route[0] == "historial"){               
    //             echo "<script>
    //                       document.getElementById('estado').style.backgroundColor = '#75D58F';
    //                       document.getElementById('estado').style.color = '#ffffff';
    //                  </script>";                
    //         }else if($route[0] == "historialtaller"){               
    //             echo "<script>
    //                       document.getElementById('taller').style.backgroundColor = '#75D58F';
    //                       document.getElementById('taller').style.color = '#ffffff';
    //                  </script>";                
    //         }        
    //     }
    // }


}