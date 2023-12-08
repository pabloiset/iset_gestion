<?php
/****************************************************************************/
// Database Connection
/****************************************************************************/

$connectionPDO= new PDO('mysql:host=localhost;dbname=sistema_escolar', 'root', '');

/****************************************************************************/
// FullCalender.io Insert Function
/****************************************************************************/
if(isset($_POST["title"])) {
$query = "INSERT INTO events (idsub,title, start_event, end_event) VALUES (:idsub,:title, :start_event, :end_event)";
$statement = $connectionPDO->prepare($query);
$statement->execute(
array(
':idsub' => $_POST['idsub'],	
':title' => $_POST['title'],
':start_event' => $_POST['start'],
':end_event' => $_POST['end']
)
);
}

/****************************************************************************/
// Database Connection Close
/****************************************************************************/
$connectionPDO = null;
?>