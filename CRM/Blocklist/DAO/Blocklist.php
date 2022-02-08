<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from blocklist/xml/schema/CRM/Blocklist/Blocklist.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:159bbedad07ca48ef6e7b568476ebe63)
 */
use CRM_Blocklist_ExtensionUtil as E;

/**
 * Database access object for the Blocklist entity.
 */
class CRM_Blocklist_DAO_Blocklist extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_blocklist';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique Blocklist ID
   *
   * @var int
   */
  public $id;

  /**
   * ID of property type
   *
   * @var int
   */
  public $property_type_id;

  /**
   * Value of the property
   *
   * @var string
   */
  public $property_value;

  /**
   * ID of block reason
   *
   * @var int
   */
  public $block_reason_id;

  /**
   * Note
   *
   * @var text
   */
  public $note;

  /**
   * @var timestamp
   */
  public $created_date;

  /**
   * @var timestamp
   */
  public $modified_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_blocklist';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Blocklists') : E::ts('Blocklist');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => E::ts('Unique Blocklist ID'),
          'required' => TRUE,
          'where' => 'civicrm_blocklist.id',
          'table_name' => 'civicrm_blocklist',
          'entity' => 'Blocklist',
          'bao' => 'CRM_Blocklist_DAO_Blocklist',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'property_type_id' => [
          'name' => 'property_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Property Type'),
          'description' => E::ts('ID of property type'),
          'required' => TRUE,
          'where' => 'civicrm_blocklist.property_type_id',
          'table_name' => 'civicrm_blocklist',
          'entity' => 'Blocklist',
          'bao' => 'CRM_Blocklist_DAO_Blocklist',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'blocklist_property_type',
            'optionEditPath' => 'civicrm/admin/options/blocklist_property_type',
          ],
          'add' => NULL,
        ],
        'property_value' => [
          'name' => 'property_value',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Property Value'),
          'description' => E::ts('Value of the property'),
          'required' => TRUE,
          'maxlength' => 512,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_blocklist.property_value',
          'table_name' => 'civicrm_blocklist',
          'entity' => 'Blocklist',
          'bao' => 'CRM_Blocklist_DAO_Blocklist',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'block_reason_id' => [
          'name' => 'block_reason_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Block Reason'),
          'description' => E::ts('ID of block reason'),
          'required' => TRUE,
          'where' => 'civicrm_blocklist.block_reason_id',
          'table_name' => 'civicrm_blocklist',
          'entity' => 'Blocklist',
          'bao' => 'CRM_Blocklist_DAO_Blocklist',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'blocklist_block_reason',
            'optionEditPath' => 'civicrm/admin/options/blocklist_block_reason',
          ],
          'add' => NULL,
        ],
        'note' => [
          'name' => 'note',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Note'),
          'description' => E::ts('Note'),
          'where' => 'civicrm_blocklist.note',
          'table_name' => 'civicrm_blocklist',
          'entity' => 'Blocklist',
          'bao' => 'CRM_Blocklist_DAO_Blocklist',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => E::ts('Created Date'),
          'required' => TRUE,
          'where' => 'civicrm_blocklist.created_date',
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_blocklist',
          'entity' => 'Blocklist',
          'bao' => 'CRM_Blocklist_DAO_Blocklist',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'modified_date' => [
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => E::ts('Modified Date'),
          'where' => 'civicrm_blocklist.modified_date',
          'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_blocklist',
          'entity' => 'Blocklist',
          'bao' => 'CRM_Blocklist_DAO_Blocklist',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'blocklist', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'blocklist', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
