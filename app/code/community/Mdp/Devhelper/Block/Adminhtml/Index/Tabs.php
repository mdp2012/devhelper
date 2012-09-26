<?php

class Mdp_Devhelper_Block_Adminhtml_Index_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function _construct()
    {
        $this->setTitle(Mage::helper('mdp_devhelper')->__('MDP Devhelper'));
    }

    protected function _beforeToHtml()
    {
        $this
            ->addTab('customer', array(
                'label'     => Mage::helper('mdp_devhelper')->__('Customer Emails'),
                'content'   => $this->getLayout()->createBlock('mdp_devhelper/adminhtml_index_tab_customer')->initForm()->toHtml(),
            ))->addTab('invoice', array(
                'label'     => Mage::helper('mdp_devhelper')->__('Invoice Emails'),
                'content'   => $this->getLayout()->createBlock('mdp_devhelper/adminhtml_index_tab_invoice')->initForm()->toHtml(),
            ))->addTab('order', array(
                'label'     => Mage::helper('mdp_devhelper')->__('Order Emails'),
                'content'   => $this->getLayout()->createBlock('mdp_devhelper/adminhtml_index_tab_order')->initForm()->toHtml(),
            ))->addTab('product', array(
                'label'     => Mage::helper('mdp_devhelper')->__('Product Emails'),
                'content'   => $this->getLayout()->createBlock('mdp_devhelper/adminhtml_index_tab_product')->initForm()->toHtml(),
            ))->addTab('shipment', array(
                'label'     => Mage::helper('mdp_devhelper')->__('Shipment Emails'),
                'content'   => $this->getLayout()->createBlock('mdp_devhelper/adminhtml_index_tab_shipment')->initForm()->toHtml(),
            ));

        return parent::_beforeToHtml();
    }
}