<?php
/**
 * Functions
 *
 * Functions required to make the SolrSystem class
 * work
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



/**
 * Load Solr
 *
 * Loads a SolrSystem class
 *
 * @param string $strFile
 * @author Simon Emms <simon@simonemms.com>
 */
function load_solr($strFile) {

    $strLocation = dirname(__FILE__);

    require_once(solr_remove_slash($strLocation.'/'.$strFile));

}





/**
 * Remove Slash
 *
 * Removes excess slashes from
 * a string
 *
 * @param string $string
 * @return string
 * @author Simon Emms <simon@simonemms.com>
 */
function solr_remove_slash($string) {
    /* Check for a protocol at the start */
    if(preg_match('/^([a-z]+)\:\/\//i', $string, $match)) {
        /* There's a legitimate double slash - keep it */
        $return = isset($match[0]) ? $match[0] : '';
        $arrString = preg_split('/^([a-z]+)\:\/\//i', $string);
        if(count($arrString) > 0) {
            foreach($arrString as $string) {
                $return .= solr_remove_slash($string);
            }
        }
        return $return;
    } else {
        /* No legitimate double slashes - get rid of them all */
        return preg_replace('/(\w)?(\/\/+)/', '\\1/', $string);
    }
}

?>