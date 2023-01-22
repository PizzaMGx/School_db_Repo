<?php
    $data = json_decode(file_get_contents('php://input'), true);
    myPhpFunction($data['field'],$data['order']);
    function myPhpFunction($param1,$param2) {
        //do something with the parameters
        echo "<p>" . "param1: " . $param1 . " param2: " . $param2 . "</p>";
    }
?>
