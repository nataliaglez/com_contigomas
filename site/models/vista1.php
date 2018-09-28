<?php

// No direct access
defined('_JEXEC') or die;

//~ //jimport('joomla.application.component.modelform');
//~ echo '<br/> Antes de entrar vista.hmtl entra en modelo de la vista. <br/>';
//~ echo '<br/> mod ->vista1.php  <br/>';
//~ echo '<br/> El objeto $controler y $this no existe... por lo que no podemos acceder  <br/>';

			
class ContigomasModelVista1 extends JModelList
{
	
	public function getComprobar()
	{
			
			//~ $envio = JRequest::getVar('jform', array(), 'get', 'array');
			// JRequest en las versiones superiores de 3.3 se dejaron... 
			$jinput = JFactory::getApplication()->input; 
			$data = $jinput->post->getArray(array());
			$envio = $data['jform'];
            $resul = array();
        // Esto es lo que hay currar... :-)
            //~ $recibo = $envio['recibo_site'];
			//~ $codigo = $envio['codigorecibo_codigo']; 
			
			//~ $db = JFactory::getDBO();
			//~ $query = "SELECT codigo, recibo, tonelada FROM #__codigoRecibo "
					//~ ."WHERE codigo ='".$codigo."' AND recibo ='".$recibo."'";
			//~ $db->setQuery($query);
			//~ $resul =  $db->loadObjectList();
			//~ $resul['Busqueda'] = $query;
			//~ $resul['DATA'] = $form;

			//~ if ($resul)
			//~ {
				//~ $codigo = $resul['0']->codigo;
				//~ $recibo = $resul['0']->recibo;
				//~ $tonelada = $resul['0']->tonelada;	
		
				
			//~ }
			$this->resultado = $resul;
			return $this->resultado;
			
	}
	
}
