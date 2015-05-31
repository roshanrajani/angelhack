<?php 
require_once 'cps_simple.php';

include ('config.php');
// Search for items with category == 'cars' and car_params/year >= 2010
$query = CPS_Term('dance*', 'service_title');

// Return documents starting with the first one - offset 0
$offset = 0;

// Return not more than 5 documents
$docs = 5;

// Return these fields from the documents
$list = array(
	
	'service_title' => 'yes',
	'service_id' => 'yes'	
	
);

// Order by year, from largest to smallest
$ordering ;

// Running the query and getting the results
$documents = $cpsSimple->search($query, $offset, $docs, $list);
$mydataarray = xml2array($documents);

foreach($mydataarray as $singlearray) {
		//print_r($singlearray);
		
		echo $singlearray['service_title'];
		echo $singlearray['service_id'];
		
}
// Looping through results



function xml2array ( $xmlObject, $out = array () )
{
    foreach ( (array) $xmlObject as $index => $node )
        $out[$index] = ( is_object ( $node ) ) ? xml2array ( $node ) : $node;

    return $out;
}

?>