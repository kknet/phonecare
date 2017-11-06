<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at http://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   Search Spell-Corrector
 * @version   1.2.8
 * @build     398
 * @copyright Copyright (C) 2017 Mirasvit (http://mirasvit.com/)
 */


class Mirasvit_MstCore_Model_Resource_Logger_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    /**
     * Constructor method
     */
    protected function _construct()
    {
        $this->_init('mstcore/logger');
    }
}