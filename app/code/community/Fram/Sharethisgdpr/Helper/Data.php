<?php

class Fram_Sharethisgdpr_Helper_Data extends Mage_Core_Helper_Abstract
{

    const ENABLE = 'fram_sharethisgdpr/config/enable';

    const SHARE_SCRIPT = 'fram_sharethisgdpr/config/gdpr_script';

    public function isEnable()
    {
        return Mage::getStoreConfig(self::ENABLE,Mage::app()->getStore()->getId());
    }

    public function getShareThisScipt()
    {
        if( !$this->isEnable() )
        {
            return null;
        }
        return Mage::getStoreConfig(self::SHARE_SCRIPT,Mage::app()->getStore()->getId());
    }
}