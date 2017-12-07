<?php
/**
 * @package		GT PIHPSSurvey
 * @author		Yudhistira Ramadhan
 * @link		http://gt.web.id
 * @license		GNU/GPL
 * @copyright	Copyright (C) 2016 Gamatechno. All Rights Reserved.
 */
defined('_JEXEC') or die;

class GTPIHPSSurveyController extends GTController
{
	public function __construct($config = array())
	{
		$config['default_view'] = 'samples';
		parent::__construct($config);
	}
}
