<?php
/**
 * index
 *
 * @author Simon Emms <simon@simonemms.com>
 */

require_once('SolrSystem/SolrSystem.class.php');

$hostname = '192.168.1.100';
$port = 8080;
$path = 'solr/core0';

$objSolr = new SolrSystem($hostname, $port, $path);

$objSolr->select()
    ->from();

echo '<pre>'.print_r($objSolr, true).'</pre>';exit;


?>