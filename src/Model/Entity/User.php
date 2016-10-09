<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\Time $tmt
 * @property int $transports_id
 * @property int $job_positions_id
 * @property int $marital_statuses_id
 * @property int $educations_id
 * @property float $basic_salary
 * @property string $password
 *
 * @property \App\Model\Entity\Transport $transport
 * @property \App\Model\Entity\Jobposition $job_position
 * @property \App\Model\Entity\Maritalstatus $marital_status
 * @property \App\Model\Entity\Education $education
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
