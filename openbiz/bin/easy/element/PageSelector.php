<?PHP
/**
 * PHPOpenBiz Framework
 *
 * LICENSE
 *
 * This source file is subject to the BSD license that is bundled
 * with this package in the file LICENSE.txt.
 *
 * @package   openbiz.bin.easy.element
 * @copyright Copyright &copy; 2005-2009, Rocky Swen
 * @license   http://www.opensource.org/licenses/bsd-license.php
 * @link      http://www.phpopenbiz.org/
 * @version   $Id$
 */

include_once("DropDownList.php");

/**
 * InputText class is element for input text
 *
 * @package openbiz.bin.easy.element
 * @author Jixian W.
 * @copyright Copyright (c) 2005-2009
 * @access public
 */
class PageSelector extends DropDownList
{

	
    function getList(){
    	$formobj=$this->getFormObj();
    	$list=array();
    	for($i=1;$i<=$formobj->m_TotalPages;$i++){
    		array_push($list,array("val"=>$i,"txt"=>$i));
    	}
    	return $list;
    }

}

?>