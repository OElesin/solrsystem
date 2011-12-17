<?php
/**
 * SolrSystem
 *
 * This file is part of SolrSystem
 *
 * SolrSystem is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * SolrSystem is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with SolrSystem.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright Copyright 2011-2012 Simon Emms (http://www.simonemms.com)
 * @license GPL v3.0 (http://www.gnu.org/licenses/gpl-3.0.txt)
 *
 * @package SolrSystem
 * @author Simon Emms <simon@simonemms.com>
 */

/* Load in the functions */
require_once(dirname(__FILE__).'/functions.php');

/* Load the SolrPHPClient service */
load_solr('SolrPHPClient/Service.php');

class SolrSystem extends Apache_Solr_Service {


    /**
     * Version of the SolrSystem library
     */
    const SOLRSYSTEM_VERSION = '1.0';


}
?>