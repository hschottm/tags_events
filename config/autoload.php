<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Tags_events
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\TagListEvents'        => 'system/modules/tags_events/classes/TagListEvents.php',

	// Modules
	'Contao\ModuleTagCloudEvents' => 'system/modules/tags_events/modules/ModuleTagCloudEvents.php',
));
