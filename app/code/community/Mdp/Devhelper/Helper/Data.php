<?php

class Mdp_Devhelper_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getEmailTemplates($type = null)
    {
        $templates = Mage_Core_Model_Email_Template::getDefaultTemplatesAsOptionsArray();
        $customTemplates = Mage::getResourceModel('core/email_template_collection')->load()->toOptionArray();

        return array_merge($customTemplates, $templates);
    }
}
