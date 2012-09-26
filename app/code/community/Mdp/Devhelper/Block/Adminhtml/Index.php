<?php

class Mdp_Devhelper_Block_Adminhtml_Index extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'devhelper';
        $this->_headerText = Mage::helper('mdp_devhelper')->__('MDP Devhelper');
        parent::__construct();
    }
}