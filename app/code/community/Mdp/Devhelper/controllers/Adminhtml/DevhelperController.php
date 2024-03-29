<?php

/**
 * main controller
 */
class Mdp_Devhelper_Adminhtml_DevhelperController extends Mage_Adminhtml_Controller_Action
{
    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('system/mdp_devhelper');
    }

    public function indexAction()
    {
        $this->_title($this->__('System'))->_title($this->__('MDP Devhelper'));

        $this->loadLayout()
            ->_setActiveMenu('system/mdp_devhelper')
            ->renderLayout();
    }
}