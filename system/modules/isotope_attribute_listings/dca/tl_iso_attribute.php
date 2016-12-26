<?php

/**
 * listings attribute for Isotope eCommerce
 *
 * @copyright jedoStyle 2016 <http://www.jedo-style.de>
 * @author Jens Doberenz <github@jedo-style.de>
 * @licence LGPL
 */



// Palette
$GLOBALS['TL_DCA']['tl_iso_attribute']['palettes']['__selector__'][] = 'icontolistitem';
$GLOBALS['TL_DCA']['tl_iso_attribute']['palettes']['Listings'] = '{attribute_legend},name,field_name,type,legend;{description_legend:hide},description;{list_legend},listtype,listclass,icontolistitem;{config_legend},mandatory';


$GLOBALS['TL_DCA']['tl_iso_attribute']['subpalettes']['icontolistitem'] = 'listitemicon'; 

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
$GLOBALS['TL_DCA']['tl_iso_attribute']['fields']['icontolistitem'] = array
        (
            'label'                 => &$GLOBALS['TL_LANG']['tl_iso_attribute']['icontolistitem'],
            'exclude'               => true,
            'inputType'             => 'checkbox',
            'eval'                  => array('submitOnChange'=>true, 'tl_class'=>'w50 clr'),
            'sql'                   => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_iso_attribute']['fields']['listitemicon'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_iso_attribute']['listitemicon'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>128, 'tl_class'=>'w50 clr'),
			'sql'                     => "varchar(128) NOT NULL default ''"
);
