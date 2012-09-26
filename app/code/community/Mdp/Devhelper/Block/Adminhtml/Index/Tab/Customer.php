<?php

class Mdp_Devhelper_Block_Adminhtml_Index_Tab_Customer extends Mage_Adminhtml_Block_Widget_Form
{
    public function initForm()
    {
        $form = new Varien_Data_Form();

        $fieldset = $form->addFieldset('content_fieldset', array('legend'=>Mage::helper('cms')->__('Content'),'class'=>'fieldset-wide'));

        $fieldset->addField('content_heading', 'text', array(
            'name'      => 'content_heading',
            'label'     => Mage::helper('cms')->__('Content Heading'),
            'title'     => Mage::helper('cms')->__('Content Heading'),
        ));

        $this->setForm($form);
        return $form;
    }
}