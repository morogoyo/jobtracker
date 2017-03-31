<?php

// include('class/class.telecom.php');

class Sql{


    // Select function
    

    function selectFrom($name){
    	$this->name = $name;
    	global $tele;
    	 
    	 // $sql = "Select * FROM companies WHERE  name LIKE '%$this->name%'";
        $sql = "Select * FROM lms_companies WHERE  name = '$this->name'";
         /* Testing Purposes */var_dump($sql);echo "</br>";
         $answer = $tele->query($sql);
         if ($answer){
            echo "the sql is true </br>";
            // var_dump($answer);
        }else{
            echo $tele->error;

        }
    	 // $answer = $tele->query($sql);$mysqli->error
        
    	if ($answer->num_rows > 0){

    		while($row = $answer->fetch_assoc()){

    			echo "Id           : ".$row['id']."</br>";
    			echo "Customer Id   : ".$row['custid']."</br>";
    			echo "Client Code  : ".$row['clientcode']."</br>";
    			echo "Name : ".$row['name']."</br>";

                echo "Street          : ".$row['street']."</br>";
                echo "Street 2   : ".$row['street2']."</br>";
                echo "City  : ".$row['city']."</br>";
                echo "State : ".$row['st']."</br>";
                echo "Zip          : ".$row['zip']."</br>";
                
                echo "Phone   : ".$row['phone']."</br>";
                echo "Fax  : ".$row['fax']."</br>";
                echo "Point of Contact: ".$row['contact']."</br>";
                


    		}
    	}
    }



    function convert_lms_companies(){  // this method generates the json files to be used by angular
        global $tele;
        $toConvert = Array();
        $sql = "SELECT * FROM lms_companies";

        $actionObject = $tele->query($sql);

        if ($actionObject->num_rows >0){
            while ($row = $actionObject->fetch_all(MYSQLI_ASSOC)) {

                    $toConvert = $row;

                     $file = fopen('companies.txt','w')or die("un able to open file at this time");
            
                    fwrite( $file , '{"info":'.json_encode($toConvert).'}');
                             
               
            }
        }


    }


    function convert_lms_projects(){  // this method generates the json files to be used by angular
        global $tele;
        $toConvert = Array();
        $sql = "SELECT * FROM lms_projects";

        $actionObject = $tele->query($sql);

        if ($actionObject->num_rows >0){
            while ($row = $actionObject->fetch_all(MYSQLI_ASSOC)) {

                    $toConvert = $row;

                     $file = fopen('projects.txt','w')or die("un able to open file at this time");
            
                    fwrite( $file , '{"info":'.json_encode($toConvert).'}');
                             
               
            }
        }


    }

    // function insertTo()// need arguments to continue this method
    //     $sql =  "INSERT /*COLUM*/,/*COLUM*/,/*COLUM*/ INTO /*TABLE NAME */ VALUES(/*ALL THE POST VARIABLES */)"
    //     $reult= $tele->query($sql)
    //     if ($tele->insert_){
    //         echo "Company was Inserted in to the data base ";
    //     }else {

    //         echo "Unfortunately this Happened ".$tele->
    //     }


}





?>