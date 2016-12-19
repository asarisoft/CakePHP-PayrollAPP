<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Payroll extends Entity
{

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _getStatusText()
    {
        if ($this->_properties['status'] == 0) {
            return "Dibuat";
        }
        return "Di-Cancel";
    }

}
