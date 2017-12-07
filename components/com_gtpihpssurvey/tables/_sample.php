<?php

/**
 * @package		GT PIHPSSurvey
 * @author		Yudhistira Ramadhan
 * @link		http://gt.web.id
 * @license		GNU/GPL
 * @copyright	Copyright (C) 2012 GtWeb Gamatechno. All Rights Reserved.
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

class TableSample extends GTTable
{
	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 * @since 1.0
	 */
	function __construct(&$db) {
		parent::__construct('#__gtpihpssurvey_samples', 'id', $db);
	}
	
	/**
	 * Stores a sample
	 *
	 * @param	boolean	True to update fields even if they are null.
	 * @return	boolean	True on success, false on failure.
	 * @since	1.6
	 */
	public function store($updateNulls = false) {
		// Attempt to store the data.
		return parent::store($updateNulls);
	}
	
	public function bind($array, $ignore = '') {
		$row = JArrayHelper::toObject($array);
		
		if(!$row->id)
			return parent::bind($array, $ignore);
		
		$array = JArrayHelper::fromObject($row);
		return parent::bind($array, $ignore);
	}
}
