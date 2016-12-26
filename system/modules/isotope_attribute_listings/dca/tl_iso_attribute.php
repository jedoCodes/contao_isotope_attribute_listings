<?php

/**
 * listings attribute for Isotope eCommerce
 *
 * @copyright jedoStyle 2016 <http://www.jedo-style.de>
 * @author Jens Doberenz <github@jedo-style.de>
 * @licence LGPL
 */



// Palette
$GLOBALS['TL_DCA']['tl_iso_attribute']['palettes']['Listings'] = '{attribute_legend},name,field_name,type,legend;{description_legend:hide},description;{list_legend},listtype,listclass;{config_legend},mandatory';

// Fields
$GLOBALS['TL_DCA']['tl_iso_attribute']['fields']['listtype'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_iso_attribute']['listtype'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('ordered', 'unordered'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_iso_attribute'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_iso_attribute']['fields']['listclass'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_iso_attribute']['listclass'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>128, 'tl_class'=>'w50'),
			'sql'                     => "varchar(128) NOT NULL default ''"
);


