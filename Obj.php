<?php
    $age = array("Peter"=>30, "David"=>40, "John"=>50);

    $jsonObj = '{"Peter":30, "David":40, "John":50}';
    $obj = json_decode($jsonObj);
    var_dump(json_decode($obj));
    echo $obj->Peter;