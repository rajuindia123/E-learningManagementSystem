<?php
class add_to_cart{
    function addProduct($pid){
      $_SESSION['cart'][$pid]=$pid;  
        
    }
    function updateProduct($pid){
        if(isset($_SESSION['cart'][$pid]=$pid)){
            $_SESSION['cart'][$pid]=$pid;
        }
        
    }
    function removeProduct($pid){
        if(isset($_SESSION['cart'][$pid]=$pid)){
           unset($_SESSION['cart'][$pid]=$pid);
        }

        
    }
    function emptyProduct(){
        unset($_SESSION['cart']);
        
    }



    
}

?>