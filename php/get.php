<?php
    $type = $_GET['type'];
    if($type == "json"){
        header("Content-type: application/json");    
		$test_array = array (
            'ime' => 'Burger',
            'meso' => 'Junece',
            'gramaza' => '250',
            'vremeTrajanjaPripreme' => '0h 30min',
        );
        echo json_encode($test_array);
    }
    else {
        header("Content-type: text/xml");
       
	   $test_array = array (
            'Burger' => 'ime',
            'Junece' => 'meso',
            '250' => 'gramaza',
            '0h 30min' => 'vremeTrajanjaPripreme',
        );
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($test_array, array ($xml, 'addChild'));
        print $xml->asXML();
    }
?>