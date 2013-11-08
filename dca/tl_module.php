<?php

/**
 * @copyright  Helmut Schottmüller 2008-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm>
 * @package    tags
 * @license    LGPL
 * @filesource
 */

/**
 * Class tl_module_tags_events
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Helmut Schottmüller 2008-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm>
 * @package    Controller
 */
class tl_module_tags_events extends tl_module
{
	/**
	 * Return available calendars
	 *
	 * @return array Array of calendars
	 */
	public function getCalendars()
	{
		$objTable = $this->Database->prepare("SELECT id, title FROM tl_calendar ORDER BY title")
			->execute();
		$tables = array();
		if ($objTable->numRows)
		{
			while ($objTable->next())
			{
				$tables[$objTable->id] = $objTable->title;
			}
		}
		return $tables;
	}
}

/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['tagcloudevents']    = '{title_legend},name,headline,type;{size_legend},tag_maxtags,tag_buckets,tag_named_class,tag_show_reset;{template_legend:hide},cloud_template;{tagextension_legend},tag_related,tag_topten;{redirect_legend},tag_jumpTo,keep_url_params;{datasource_legend},tag_calendars;{expert_legend:hide},cssID';


/**
 * Add fields to tl_module
 */

$GLOBALS['TL_DCA']['tl_module']['fields']['tag_calendars'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['tag_calendars'],
	'inputType'               => 'checkbox',
	'options_callback'        => array('tl_module_tags_events', 'getCalendars'),
	'eval'                    => array('multiple'=>true),
	'sql'                     => "blob NULL"
);

?>