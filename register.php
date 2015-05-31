<?php
	extract($_POST);
	session_start();

// Includes
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
	new CPS_LoadBalancer($connectionStrings),
	'serviceadda',
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

if(isset($join_type))
{
	$document = array(
	'type' => 'Seller',
	'Name' => $join_name,
	'email' => $join_email,
	'password'=>$join_pass
	);
	$_SESSION['Name']=$join_name;
	$_SESSION['email']=$join_email;
	$_SESSION['type']='Seller';
	define('logged','1');
	header('Location:sellerdashboard.php');
	
}
else
{	$document = array(
	'type' => 'Buyer',
	'Name' => $join_name,
	'password' => $join_pass,
	'email' => $join_email,
	);
	$_SESSION['Name']=$join_name;
	$_SESSION['email']=$join_email;
	$_SESSION['type']="Buyer";
	header('Location:buy.html');
	
}
// Insert
$cpsSimple->insertSingle($join_email,$document);
 
?>
		