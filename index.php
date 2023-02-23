<?php 
session_start();

include "act/func.php";
include "act/nav.php";
include "componen/header.php";


$ar = count($nav);

if ( !isset($nav[4]) || $nav[4] == null || $nav[4] != "index.php"){
header("location:".base_url()."index.php/simulasi/");
}
$rw = count($nav);
$rw=-1;

if($rw < 0 ){
    $rw = 0;
}
if( $nav[$rw] == null){
    include "user/nofd.php"; 
}
if( isset($nav[5])  && count($nav) == 6 ){

    
    if( $nav[5] == "simulasi"){
        include "user/formcalc.php";
    }else{
       include "user/nofd.php";
    }




}
if( isset($nav[6])  && count($nav) == 7 ){

    
    if( $nav[6] == "show"){
        include "user/show.php";
    }else{
       include "user/nofd.php";
    
    }



}




// if( isset($nav[5]) AND count($nav) !=5 ){

//     if( $nav[5] == "simulasi"){
//         include "user/formcalc.php";
//     }else if($nav[5] == null){
//         header("location:".base_url()."index.php/simulasi/");
//     }else{
//         include "user/nofd.php";
//     }
// }


// if( isset($nav[6])){

// if( $nav[6] == "show"){
//     include "user/show.php";
// }else if($nav[6] == null){
//     include "user/formcalc.php"; 
// }else{
//     include "user/nofd.php";
// }
// }

include "componen/footer.php";

?>


  
