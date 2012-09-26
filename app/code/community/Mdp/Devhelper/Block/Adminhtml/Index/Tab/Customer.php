<?php

class Mdp_Devhelper_Block_Adminhtml_Index_Tab_Customer extends Mage_Adminhtml_Block_Widget_Container
{
    public function _beforeToHtml()
    {
        $this->addBlock();

        return parent::_beforeToHtml();
    }

    public function initForm()
    {
        $form = new Varien_Data_Form();

        $fieldset = $form->addFieldset(
            'content_fieldset',
            array(
                'legend' => Mage::helper('mdp_devhelper')->__('Customer'),
                'class'=>'fieldset-wide'
            )
        );

        $fieldset->addField('customer_id', 'text', array(
            'name'      => 'customer_id',
            'label'     => Mage::helper('mdp_devhelper')->__('Customer ID'),
            'title'     => Mage::helper('mdp_devhelper')->__('Customer ID'),
        ));

        $fieldset->addField('mail_template', 'select', array(
            'name'      => 'mail_template',
            'label'     => Mage::helper('mdp_devhelper')->__('Email Template'),
            'title'     => Mage::helper('mdp_devhelper')->__('Email Template'),
            'values'    => Mage::helper('mdp_devhelper')->getEmailTemplates('customer'),
        ));

        $fieldset->addField('receiver_email', 'text', array(
            'name'      => 'receiver_email',
            'label'     => Mage::helper('mdp_devhelper')->__('Receiver Email'),
            'title'     => Mage::helper('mdp_devhelper')->__('Receiver Email'),
        ));

        $fieldset->addField('send_mail', 'button', array(
            'name'      => 'send_mail',
            'value'     => Mage::helper('mdp_devhelper')->__('Send Email'),
        ));
        
        $this->setForm($form);
        return $form;
    }
}