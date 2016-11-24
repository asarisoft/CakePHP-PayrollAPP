<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;


class User extends Entity
{

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }


    protected function _getPrivilegesText()
    {
        if ($this->_properties['privileges'] == 1) {
            return "Administrator";
        }
        elseif ($this->_properties['privileges'] == 2) {
            return "Manager";
        }
        return "Pegawai";
    }
}
