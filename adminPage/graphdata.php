<?php
// Fetch data from your database or any other source.
//for now this will do.
$data = [[65, 59, 80, 81, 56, 55, 40],[28, 48, 40, 19, 86, 27, 90],[93, 34, 67, 12, 56, 78, 23]];

// Output the data as JSON.
echo json_encode($data);
?>