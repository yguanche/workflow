<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Licencia Entity
 *
 * @property string $numreg
 * @property int $numexp
 * @property int $estexpediente_numexp
 * @property int $histlicencia_numexp
 * @property int $regsolicitante_numreg
 * @property string $apl_comerc_lic
 * @property string $ubicacion
 * @property string $datos_fisicos_local
 * @property string $user_gestiona
 * @property \Cake\I18n\Time $fecha_in
 * @property \Cake\I18n\Time $fecha_out
 */
class Licencia extends Entity
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
