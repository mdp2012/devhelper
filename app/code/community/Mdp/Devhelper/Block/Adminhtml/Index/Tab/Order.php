<?php

class Mdp_Devhelper_Block_Adminhtml_Index_Tab_Order extends Mage_Adminhtml_Block_Widget_Form
{
    public function initForm()
    {
        $form = new Varien_Data_Form();

        $fieldset = $form->addFieldset(
            'content_fieldset',
            array(
                'legend' => Mage::helper('mdp_devhelper')->__('Content'),
                'class'=>'fieldset-wide'
            )
        );

        $fieldset->addField('content_heading', 'text', array(
            'name'      => 'content_heading',
            'label'     => Mage::helper('mdp_devhelper')->__('Receiver Email'),
            'title'     => Mage::helper('mdp_devhelper')->__('Receiver Email'),
        ));

        $this->setForm($form);
        return $form;
    }
}