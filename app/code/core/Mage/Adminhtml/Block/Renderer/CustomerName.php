<?php
class Mage_Adminhtml_Block_Renderer_CustomerName extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract {
 
    public function render(Varien_Object $row) {
           
			$value = $row->getData('firstname').'   '.
                $row->getData('lastname');
        
        return $value;


    }
}

?>