<?php
    $type = $_POST['type'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    
    if($type == "json"){
        header("Content-type: application/json");
        $test_array = array (
            'Povrsina pravougaonika ' => $a*$b,
        );
        echo json_encode($test_array);
    }
    else {
        header("Content-type: text/xml");
        $test_array = array (
            $a*$b => 'Povrsina pravougaonika',
        );
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($test_array, array ($xml, 'addChild'));
        print $xml->asXML();
    }
?>
