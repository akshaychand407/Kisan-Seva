<?php

include'connection.php';
 
$id        = $_POST['hiddenId'];
$table     = $_POST['table'];
$result    = mysqli_query($conn,"SELECT * FROM `$table` WHERE id='$id'");
if(mysqli_num_rows($result)) {
$row       = mysqli_fetch_assoc($result); 
$data      = array(
'fertilizer'                       => $row['fertilizer'],
'usage'                            => $row['usage'],
);  
echo json_encode($data);
}
else {
echo json_encode(array('status'=>0,'message'=>'Error in Processing'));
}
