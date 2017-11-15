<?php
class Dylan_Repairdevice_Block_Adminhtml_Repairdevice_Edit_Tab_Products extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();

        $this->setId('webGrid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        //$this->setUseAjax(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('repairdevice/repairproduct')
            ->getCollection()
            ->addAttributeToFilter('repair_id' , $this->getRequest()->getParam('id'));

        $this->setCollection($collection);
       //print_r($collection);exit;
        return parent::_prepareCollection();
    }

    public function _prepareColumns()
    {
        $this->addColumn('product_id' , array(
            'header'	=> 'Product Id',
			'align'     => 'left',
            'width'     => '100px',
            'index'     => 'product_id',
            'type'  => 'number',
            'sortable' => true,
        ));
		
		$this->addColumn('product_name' , array(
            'header'	=> 'Product Name',
            'type'      => 'content',
			'renderer'  => 'repairdevice/adminhtml_repairdevice_renderer_productname'
        ));

        return parent::_prepareColumns();
    }
}