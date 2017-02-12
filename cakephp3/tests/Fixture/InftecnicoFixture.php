<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InftecnicoFixture
 *
 */
class InftecnicoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'inftecnico';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'numexp' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'licencia_numreg' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'licencia_numexp' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'aprobado_junta' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => null, 'comment' => '', 'precision' => null],
        'aprobado_secretaria' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => null, 'comment' => '', 'precision' => null],
        'user_act_gestiona' => ['type' => 'string', 'length' => 35, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_in' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_out' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'licencia_key1' => ['type' => 'index', 'columns' => ['licencia_numreg'], 'length' => []],
            'licencia_key2' => ['type' => 'index', 'columns' => ['licencia_numexp'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['numexp'], 'length' => []],
            'inftecnico_ibfk_1' => ['type' => 'foreign', 'columns' => ['licencia_numreg'], 'references' => ['licencias', 'numreg'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'inftecnico_ibfk_2' => ['type' => 'foreign', 'columns' => ['licencia_numexp'], 'references' => ['licencias', 'numexp'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'numexp' => 1,
            'licencia_numreg' => 'Lorem ipsum d',
            'licencia_numexp' => 1,
            'aprobado_junta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'aprobado_secretaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'user_act_gestiona' => 'Lorem ipsum dolor sit amet',
            'fecha_in' => '2017-02-12',
            'fecha_out' => '2017-02-12'
        ],
    ];
}
