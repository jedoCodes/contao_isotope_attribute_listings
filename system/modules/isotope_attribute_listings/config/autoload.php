<?php


/**
 * Register PSR-0 namespace
 *
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