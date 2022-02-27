<?php
/**
 * List attribute for Isotope eCommerce and Contao CMS.
 * Copyright (c) 2016 jedo.Codes
 *
 * @category ContaoModule
 * @package  jedocodes/sitebuilder-bundle
 * @author   jedo.Codes <develop@jedo.codes>
 * @link     https://github.com/jedocodes/contao_isotope_attribute_listings
 */

$GLOBALS['BE_FFL']['Listings']           = 'Contao\ListWizard';

\Isotope\Model\Attribute::registerModelType('Listings', 'Isotope\Model\Attribute\Listings');