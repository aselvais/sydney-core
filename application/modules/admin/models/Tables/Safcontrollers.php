<?php
/**
 * File generated by the Sydney_Admin_Generator v2.0
 */

/**
 * Mapping of the Safcontrollers table in an object
 * @package Admindb
 * @subpackage ModelGenerated
 */
class Safcontrollers extends SafcontrollersOp
{
    protected $_schema = 'sydney';
    protected $_name = 'safcontrollers';
    protected $_dependentTables = array(
        'Safactions'
    );
    protected $_referenceMap = array(
        'Safmodules' => array(
            'columns'       => 'safmodules_id',
            'refTableClass' => 'Safmodules',
            'refColumns'    => 'id'
        ),
    );
    protected $_primary = 'id';

    public $fieldsNames = array(
        'id', // bigint()
        'label', // varchar(50)
        'name', // varchar(45)
        'image', // varchar(150)
        'description', // varchar(255)
        'safmodules_id', // bigint()
    );

    protected $_metadata = array(
        'id'            => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "safcontrollers",
            'COLUMN_NAME'      => "id",
            'COLUMN_POSITION'  => 1,
            'DATA_TYPE'        => "bigint",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => true,
            'PRIMARY_POSITION' => 1,
            'IDENTITY'         => true,
        ),
        'label'         => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "safcontrollers",
            'COLUMN_NAME'      => "label",
            'COLUMN_POSITION'  => 2,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => "50",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'name'          => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "safcontrollers",
            'COLUMN_NAME'      => "name",
            'COLUMN_POSITION'  => 3,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => "45",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'image'         => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "safcontrollers",
            'COLUMN_NAME'      => "image",
            'COLUMN_POSITION'  => 4,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => "150",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'description'   => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "safcontrollers",
            'COLUMN_NAME'      => "description",
            'COLUMN_POSITION'  => 5,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => "255",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'safmodules_id' => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "safcontrollers",
            'COLUMN_NAME'      => "safmodules_id",
            'COLUMN_POSITION'  => 6,
            'DATA_TYPE'        => "bigint",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
    );

    public function __construct($id = 0)
    {
        $this->_schema = Sydney_Tools_Sydneyglobals::getConf()->db->params->dbname;
        parent::__construct($id);
    }

}
