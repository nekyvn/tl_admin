<?php
require_once('./library/smarty/Smarty.class.php');
class template extends Smarty{
	function __construct(){
		parent::__construct();

		// Set the directory where templates are stored
		$this->setTemplateDir('template');

		$this->setCompileDir('template_C');
	}
}