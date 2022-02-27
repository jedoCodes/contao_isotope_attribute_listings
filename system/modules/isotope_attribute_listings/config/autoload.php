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


if (class_exists('NamespaceClassLoader')) {
    NamespaceClassLoader::add('Isotope', 'system/modules/isotope_attribute_listings/library');
}

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Src
	'Isotope\Model\Attribute\Listings' => 'system/modules/isotope_attribute_listings/library/Model/Attribute/Listings.php',
));