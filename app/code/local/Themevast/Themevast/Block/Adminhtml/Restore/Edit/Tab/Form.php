<?php

class Themevast_Themevast_Block_Adminhtml_Restore_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('themevast_form', array('legend'=>Mage::helper('themevast')->__('Setting')));

      if (!Mage::app()->isSingleStoreMode()) {
          $fieldset->addField('store_ids', 'multiselect', array(
              'name' => 'store_ids[]',
              'label' => $this->__('Store View'),
              'required' => TRUE,
              'values' => Mage::getSingleton('adminhtml/system_store')->getStoreValuesForForm(FALSE, TRUE),
          ));
      }

      $fieldset->addField('action', 'select', array(
          'name' => 'action',
          'title' => Mage::helper('cms')->__('Store View'),
          'label' => Mage::helper('cms')->__('Action'),
          'values' => array(
              array('value' => 'install', 'label' => 'Install Template'),
              array('value' => 'uninstall', 'label' => 'Uninstall Template'),
          ),
      ));

      if ( Mage::getSingleton('adminhtml/session')->getThemevastData() ){
          $form->setValues(Mage::getSingleton('adminhtml/session')->getThemevastData());
          Mage::getSingleton('adminhtml/session')->setThemevastData(null);
      } elseif ( Mage::registry('themevast_data') ) {
          $form->setValues(Mage::registry('themevast_data')->getData());
      }
      return parent::_prepareForm();
  }
}

