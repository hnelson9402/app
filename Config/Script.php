<?php

namespace Config;

class Script
{    
                    
    /*=====================script necessary for Datatables=========================================*/
    public static function scriptDatatable()
    {
        echo "<script src='" . Server::SERVER . "Assets/js/datatables/datatables.js'></script>";
        echo "<script src='" . Server::SERVER . "Assets/js/datatables/dataTables.buttons.js'></script>";
        echo "<script src='" . Server::SERVER . "Assets/js/datatables/jszip.min.js'></script>";
        echo "<script src='" . Server::SERVER . "Assets/js/datatables/pdfmake.min.js'></script>";
        echo "<script src='" . Server::SERVER . "Assets/js/datatables/vfs_fonts.js'></script>";
        echo "<script src='" . Server::SERVER . "Assets/js/datatables/buttons.html5.min.js'></script>";
        echo "<script src='" . Server::SERVER . "Assets/js/datatables/dataTables.fixedHeader.min.js'></script>";        
    }

    /*========================change script dynamic=========================*/
    public static function changeScript()
    {
        if (isset($_GET['views'])) {
            $route = explode("/", $_GET['views']);

            if ($route[0] == "user") {
                echo "<script src='" . Server::SERVER . "Views/user/user.js' type='module'></script>";
            } else if ($route[0] == "group") {
                self::scriptDatatable();
                echo "<script src='" . Server::SERVER . "Views/group/group.js'></script>";
            } else if ($route[0] == "product") {
                self::scriptDatatable();
                echo "<script src='" . Server::SERVER . "Views/product/product.js'></script>";
            } else if ($route[0] == "history") {
                self::scriptDatatable();
                echo "<script src='" . Server::SERVER . "Views/history/history.js'></script>";
            }
        }
    }
}
