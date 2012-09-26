<?php

class Mdp_Devhelper_Block_Adminhtml_Index_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setTitle(Mage::helper('mdp_devhelper')->__('MDP Devhelper'));
    }

    protected function _beforeToHtml()
    {
        $this->addTab('customer', array(
            'label'     => Mage::helper('mdp_devhelper')->__('Customer Emails'),
            'content'   => $this->getLayout()->createBlock('mdp_devhelper/adminhtml_index_tab_customer')->initForm()->toHtml(),
        ));

        return parent::_beforeToHtml();
    }
}