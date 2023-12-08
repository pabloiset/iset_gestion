<?php
/****************************************************************************/
// Database Connection
/****************************************************************************/

$connectionPDO= new PDO('mysql:host=localhost;dbname=sistema_escolar', 'root', '');
/****************************************************************************/
// FullCalender.io Load Function
/****************************************************************************/




$query = $connectionPDO->query("SELECT events.id, subgrade.idsub, subgrade.nomsub, events.title, events.start_event, events.end_event FROM events INNER JOIN subgrade ON events.idsub = subgrade.idsub ");
while ($row = $query->fetch()) {
    $data[] = array(
'id' => $row["id"],
'idsub' => $row["idsub"],
'title' => $row["title"],
'start' => $row["start_event"],
'end' => $row["end_event"]
);
}
echo json_encode($data);

/****************************************************************************/
// Database Connection Close
/****************************************************************************/
$connectionPDO = null;
?>