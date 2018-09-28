<?php
defined( '_JEXEC') or die( 'Restricted access');
jimport( 'joomla.application.component.view');

class ContigomasViewContigomas extends JViewLegacy
{
	protected $form;
	
	function display($tpl = null)
	{
		//$this->msg ='hola front-end';
		$item = $this->get('Item');
        //~ echo '<pre>';
        //~ print_r($item);
        //~ echo '</pre>';


        $this->form = $this->get('Form');
		
		//Consigo los parametros de opc config (btn menu toolbar dl com_nuevo)
		$params = JComponentHelper::getParams('com_contigomas');
			//$titul=$params->get('texto_principal');
		
		$this->assignRef('params',		$params);	
		
		//display de la vista
		parent::display($tpl);
	}
	
}
