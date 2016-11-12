<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payroll Entity
 *
 * @property int $id
 * @property int $users_id
 * @property \Cake\I18n\Time $created
 * @property int $month
 * @property int $year
 * @property float $basic_salary
 * @property float $position_allowance
 * @property float $communication_allowance
 * @property float $rice_allowance
 * @property float $education_allowance
 * @property float $transport_allowance
 * @property float $collector_share_profit
 * @property float $other_allowance_1
 * @property string $other_allowance_2
 * @property float $other_allowance_3
 * @property float $other_allowance_4
 * @property float $other_allowance_5
 *
 * @property \App\Model\Entity\User $user
 */
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
