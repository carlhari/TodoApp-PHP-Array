<?php
 
    session_start();
    $status="";

    function printForm($value, $index){
        echo "<form class=\"added-task\" method=\"POST\">
                    <input type=\"hidden\" name=\"newtask\"  value=\"$value\">
                    <input type=\"text\" class=\"newtask\" value=\"$index: $value\" disabled>
                    <input type=\"submit\" name=\"delete\" value=\"DELETE\" class=\"btn-delete\">
              </form>";          
    }

    
    function uniqueForm($unique){
        foreach($unique as $value){
            if(!$value){continue;}
            $index = array_search($value, $unique);
            printForm($value, $index);
        }
    }


    
    if(isset($_POST['task']) && isset($_POST['add'])){
        $task = $_POST['task'];
        if(!empty($task)){
            if (!isset($_SESSION['task'])) {
                $_SESSION['tasks'][0]= "";
            }
                array_push($_SESSION['tasks'], $task);
                $status = "Successfully Added";
                $unique = array_values(array_unique($_SESSION['tasks']));
                uniqueForm($unique);        
        }    
    }


    if(isset($_POST['delete'])){
        $unique = array_values(array_unique($_SESSION['tasks']));
      
        $newtask = $_POST['newtask'];
        
        $index = array_search($newtask, $unique);

     
        unset($unique[$index]);
        $unique = array_values($unique);
        $_SESSION['tasks'] = $unique;

        uniqueForm($unique);
    }


    //session_unset();
   
  
   

   

   

  

 
?>