<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LicenciasFixture
 *
 */
class LicenciasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'numreg' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'numexp' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'estexpediente_numexp' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'histlicencia_numexp' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'regsolicitante_numreg' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'apl_comerc_lic' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'ubicacion' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'datos_fisicos_local' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_gestiona' => ['type' => 'string', 'length' => 35, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_in' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_out' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'estexpediente_key' => ['type' => 'index', 'columns' => ['estexpediente_numexp'], 'length' => []],
            'histlicencia_key' => ['type' => 'index', 'columns' => ['histlicencia_numexp'], 'length' => []],
            'regsolicitante_key' => ['type' => 'index', 'columns' => ['regsolicitante_numreg'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['numexp'], 'length' => []],
            'numreg' => ['type' => 'unique', 'columns' => ['numreg', 'numexp'], 'length' => []],
            'licencias_ibfk_1' => ['type' => 'foreign', 'columns' => ['estexpediente_numexp'], 'references' => ['estexpedientes', 'numexp'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'licencias_ibfk_2' => ['type' => 'foreign', 'columns' => ['histlicencia_numexp'], 'references' => ['histlicencias', 'numexp'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'licencias_ibfk_3' => ['type' => 'foreign', 'columns' => ['regsolicitante_numreg'], 'references' => ['regsolicitantes', 'numreg'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'numreg' => 'Lorem ipsum d',
            'numexp' => 1,
            'estexpediente_numexp' => 1,
            'histlicencia_numexp' => 1,
            'regsolicitante_numreg' => 1,
            'apl_comerc_lic' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'ubicacion' => 'Lorem ipsum dolor sit amet',
            'datos_fisicos_local' => 'Lorem ipsum dolor sit amet',
            'user_gestiona' => 'Lorem ipsum dolor sit amet',
            'fecha_in' => '2017-02-12',
            'fecha_out' => '2017-02-12'
        ],
    ];
}
