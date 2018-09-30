<?php
defined('_JEXEC') or die("Invalid access");
jimport('joomla.application.component.modellist');

//nomenclatura : nombreComponente+Model+nombreVista
//JModelList 
class ContigomasModelContigomas extends JModelList
{
	protected function getListQuery()
	{
		//Crea un nuevo objeto de consulta
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Selecciona algunos campos
		$query->select('id, created, nombre, apellidos, dni, telefono, email, calle, numero, piso,codigopostal,municipio,provincia,aceptar');
		// de nuestra tabla
		$query->from('#__contigomas');
		
		//columnas que se muestran, id  , ordenado asc...
		$orderCol	= $this->state->get('list.ordering', 'id');
		$orderDirn	= $this->state->get('list.direction', 'asc');
		//~ if ($orderCol == 'a.ordering' || $orderCol == 'category_title') {
			//~ $orderCol = 'c.title '.$orderDirn.', a.ordering';
		//~ }
		$query->order($db->escape($orderCol.' '.$orderDirn));
		
		
		
		return $query;
	}
	protected function getInsertQuery(){
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$columns = array('nombre', 'apellidos', 'dni', 'telefono', 'email', 'calle', 'numero', 'piso', 'codigopostal', 'municipio', 'provincia', 'aceptar', 'created', 'created_by', 'created_by_alias', 'modified', 'modified_by');
		$idUsuario="661";
		$aliasUsua='Ricardo40';
		$fecha=date("Y-m-d H:i:s");
		$values = array($nombre, $apellido, $dni, $telefono, $email, $calle, $numero, $piso, $codigoPostal, $municipio, $provincia, $aceptar, $fecha, $idUsuario, $aliasUsua, $fecha, $idUsuario);
		$query
			->insert($db->quoteName('#__contigomas'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values));
		$db->setQuery($query);
		$db->execute();
	}
	
}
