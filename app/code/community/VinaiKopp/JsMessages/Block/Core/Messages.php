<?php


/**
 * Class VinaiKopp_JsMessages_Block_Core_Messages
 */
class VinaiKopp_JsMessages_Block_Core_Messages
    extends Mage_Core_Block_Template
{
    protected function _prepareLayout()
    {
        $this->setTemplate('vinaikopp/jsmessages/messages.phtml');
        return parent::_prepareLayout();
    }


    public function addMessage(Mage_Core_Model_Message_Abstract $message)
    {
        return $this;
    }

    public function addMessages(Mage_Core_Model_Message_Collection $messages)
    {
        return $this;
    }

    public function addStorageType($type)
    {
        return $this;
    }
    
    


} 