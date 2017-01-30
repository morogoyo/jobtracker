<?php

// include('class/class.telecom.php');

class Sql{


    // Select function
    

    function selectFrom($name){
    	
    	global $tele;
    	 
    	 $sql = "Select * FROM projects WHERE  jobname LIKE '%$name%'";

    	 $answer = $tele->query($sql);

    	if ($answer->num_rows >0){

    		while($row = $answer->fetch_assoc()){

    			echo "Company Id : ".$row['companyid']."</br>";
    			echo "Job Number : ".$row['jobnum']."</br>";
    			echo "Job Started : ".$row['opened']."</br>";
    			echo "Billed Sub E : ".$row['bill_sub_e']."</br></br></br></br>";
    			


    		}



    	}

    }





}





?>