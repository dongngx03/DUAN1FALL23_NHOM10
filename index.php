<?php
 include_once'./views/components/header.php';


    if(isset($_GET['act'])) {
        $act = $_GET['act'];
        
        switch ($act) {
            case 'home':
                include_once'./views/home/home.php';
                break;
            case 'quenmk':
                include_once'./views/login/quenmk.php';
                break;
                
        }
    }else{
        include_once'./views/home/home.php';
    }

 include_once'./views/components/footer.php';
 
   
 ?>