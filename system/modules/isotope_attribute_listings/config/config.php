<?php

/**
 * listings attribute for Isotope eCommerce
 *
 * @copyright jedoStyle 2016 <http://www.jedo-style.de>
 * @author Jens Doberenz <github@jedo-style.de>
 * @licence LGPL
 */

$GLOBALS['BE_FFL']['Listings']           = 'Contao\ListWizard';

\Isotope\Model\Attribute::registerModelType('Listings', 'Isotope\Model\Attribute\Listings');