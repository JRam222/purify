<?php 

include_once 'conn.php';

$query = "SELECT * FROM events";

$eventsArray = array();

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {

       array_push($eventsArray, $row);
    }
  
    if(count($eventsArray)){

         createXMLfile($eventsArray);

     }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

function createXMLfile($eventsArray){
  
   $filePath = 'monthly.xml';

   $dom     = new DOMDocument('1.0', 'utf-8'); 

   $root      = $dom->createElement('monthly'); 

   for($i=0; $i<count($eventsArray); $i++){
     
     $eventId        =  $eventsArray[$i]['id'];  

     $eventName      =  $eventsArray[$i]['name']; 

     $eventStart    =  $eventsArray[$i]['startdate']; 

     $eventEnd     =  $eventsArray[$i]['enddate']; 

     $eventStartTime      =  $eventsArray[$i]['starttime']; 

     $eventEndTime  =  $eventsArray[$i]['endtime'];
       
     $eventColor  =  $eventsArray[$i]['color'];
       
     $eventURL  =  $eventsArray[$i]['url'];	

     $event = $dom->createElement('event');

     //$event->setAttribute('id', $eventId);
       
     $id     = $dom->createElement('id', $eventId); 

     $event->appendChild($id); 

     $name     = $dom->createElement('name', $eventName); 

     $event->appendChild($name); 

     $start   = $dom->createElement('startdate', $eventStart); 

     $event->appendChild($start); 

     $end    = $dom->createElement('enddate', $eventEnd); 

     $event->appendChild($end); 

     $startTime     = $dom->createElement('starttime', $eventStartTime); 

     $event->appendChild($startTime); 
     
     $endTime = $dom->createElement('endtime', $eventEndTime); 

     $event->appendChild($endTime);
       
     $color = $dom->createElement('color', $eventColor); 

     $event->appendChild($color);
       
     $url = $dom->createElement('url', $eventURL); 

     $event->appendChild($url);
 
     $root->appendChild($event);

   }

   $dom->appendChild($root); 

   $dom->save($filePath); 

 } 

header("Location: index.php");