<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inftecnico Entity
 *
 * @property int $numexp
 * @property string $licencia_numreg
 * @property int $licencia_numexp
 * @property string $aprobado_junta
 * @property string $aprobado_secretaria
 * @property string $user_act_gestiona
 * @property \Cake\I18n\Time $fecha_in
 * @property \Cake\I18n\Time $fecha_out
 */
class Inftecnico extends Entity
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
        'numexp' => false
    ];
}
