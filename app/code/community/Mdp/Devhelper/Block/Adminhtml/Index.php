<?php

class Mdp_Devhelper_Block_Adminhtml_Index extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'mdp_devhelper';
        $this->_controller = 'adminhtml';
        $this->_mode = 'index';

        $this->_headerText = Mage::helper('mdp_devhelper')->__('MDP Devhelper');
        parent::__construct();

        $this->_removeButton('back');
        $this->_removeButton('reset');
        $this->_removeButton('save');
    }
}
