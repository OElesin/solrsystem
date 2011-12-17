<?php
/**
 * index
 *
 * @author Simon Emms <simon@simonemms.com>
 */

require_once('SolrSystem/SolrSystem.class.php');

$objSolr = new SolrSystem();

echo '<pre>'.print_r($objSolr, true).'</pre>';exit;


?>