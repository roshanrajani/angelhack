<?php 
require_once 'cps_simple.php';

// Connection hubs
$connectionStrings = array(
	'tcp://cloud-eu-0.clusterpoint.com:9007',
	'tcp://cloud-eu-1.clusterpoint.com:9007',
	'tcp://cloud-eu-2.clusterpoint.com:9007',
	'tcp://cloud-eu-3.clusterpoint.com:9007'
);

// Creating a CPS_Connection instance
$cpsConn = new CPS_Connection(
	'tcp://cloud-eu-0.clusterpoint.com:9007',
	'test',
	'gauravkumarbaid@gmail.com',
	'975712152171',
	'document',
	'//document/id',
	array('account' => 810)
);

// Debug
//$cpsConn->setDebug(true);
// Creating a CPS_Simple instance
$cpsSimple = new CPS_Simple($cpsConn);
// Search for items with category == 'cars' and car_params/year >= 2010
$query = CPS_Term('GAURAV', 'title');

// Return documents starting with the first one - offset 0
$offset = 0;

// Return not more than 5 documents
$docs = 5;

// Return these fields from the documents
$list = array(
	'id' => 'yes',
	'body/text' => 'yes',
	'title' => 'yes'
);

// Order by year, from largest to smallest
$ordering ;

// Running the query and getting the results
$documents = $cpsSimple->search($query, $offset, $docs, $list);

// Looping through results
foreach ($documents as $id => $document) {
	echo $document->title . ' ' . $document->body->text . '<br />';
}
?>