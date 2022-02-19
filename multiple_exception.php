<?php
/*class divideByZero extends Exception{};
class divideByNegetive extends Exception{};*/
function check($a){
    try{
        if($a==0){
            throw new exception("cannot divide by zero");
        }
        else if($a<0){
            throw new exception("cannot divide by negetive number");
        }else{
            echo 2/$a; 
     }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    finally{
        echo "<br>";
        echo "you cannot put zero or negetive number in denominetor";
    }

    /*catch(Exception $ex){
        echo $e->getMessage();
    }
    catch(exception $exc){
        echo "unknown Exception";
    }*/

}
check(0);

?>