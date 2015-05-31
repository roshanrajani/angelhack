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
?>