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


namespace Isotope\Model\Attribute;

use Isotope\Interfaces\IsotopeAttribute;
use Isotope\Interfaces\IsotopeProduct;
use Isotope\Model\Attribute;


/**
 * Attribute to implement TextArea widget
 *
 * @copyright  Isotope eCommerce Workgroup 2009-2012
 * @author     Andreas Schempp <andreas.schempp@terminal42.ch>
 */
class Listings extends Attribute implements IsotopeAttribute
{

    public function saveToDCA(array &$arrData)
    {
        parent::saveToDCA($arrData);

        $arrData['fields'][$this->field_name]['sql'] = "blob NULL";

    }

    public function generate(IsotopeProduct $objProduct, array $arrOptions = array())
    {
		$varValue = parent::getValue($objProduct);
        $varValue = deserialize($varValue);

        if (empty($varValue)) {

            return '';

        } else {

            return $this->generateListings($varValue);

        }

    }

    public function generateListings(array $arrValues)
    {
        $listtag = ($this->listtype == 'ordered') ? 'ol' : 'ul';

        if ($this->icontolistitem) {
            $itemicon = "<span class='" . $this->listitemicon. "'></span>";
        } else {
            $itemicon = "";
        }

        $strBuffer = "\n<".$listtag." class='".$this->listclass."'>";

        $current = 0;
        $last    = count($arrValues) - 1;
        foreach ($arrValues as $value) {
            $class = trim(($current === 0 ? 'first' : '') . ($current === $last ? ' last' : ''));

            $strBuffer .= "\n<li" . ($class !== '' ? ' class="' . $class . '"' : '') . '>' . $itemicon . $value . '</li>';

            $current += 1;
        }

        $strBuffer .= "\n</".$listtag.">";

        return $strBuffer;
    }

}