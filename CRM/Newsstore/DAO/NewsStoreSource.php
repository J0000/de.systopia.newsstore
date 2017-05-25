<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.6                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Newsstore/NewsStoreSource.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Newsstore_DAO_NewsStoreSource extends CRM_Core_DAO {
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_newsstoresource';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Unique NewsStoreSource ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Human name to identify this NewsStoreSource used in administrative interface.
   *
   * @var string
   */
  public $name;
  /**
   * A URI used by the class implementing fetch to identify the source. e.g. for an RSS source it might be https://mysite.com/rss.xml
   *
   * @var string
   */
  public $uri;
  /**
   * The name of the implementing class. Different classes are availble for different types of source, e.g. RSS or Drupal Views.
   *
   * @var string
   */
  public $type;
  /**
   * When this source was last fetched from.
   *
   * @var datetime
   */
  public $last_fetched;
  /**
   * How many days should items be kept for?
   *
   * @var int unsigned
   */
  public $retention_days;
  /**
   * How many days should items be kept for?
   *
   * @var string
   */
  public $fetch_frequency;
  /**
   * class constructor
   *
   * @return civicrm_newsstoresource
   */
  function __construct() {
    $this->__table = 'civicrm_newsstoresource';
    parent::__construct();
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'Unique NewsStoreSource ID',
          'required' => true,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name') ,
          'description' => 'Human name to identify this NewsStoreSource used in administrative interface.',
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'uri' => array(
          'name' => 'uri',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Uri') ,
          'description' => 'A URI used by the class implementing fetch to identify the source. e.g. for an RSS source it might be https://mysite.com/rss.xml',
          'required' => true,
          'maxlength' => 1024,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'type' => array(
          'name' => 'type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Type') ,
          'description' => 'The name of the implementing class. Different classes are availble for different types of source, e.g. RSS or Drupal Views.',
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'last_fetched' => array(
          'name' => 'last_fetched',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Last Fetched') ,
          'description' => 'When this source was last fetched from.',
          'required' => false,
        ) ,
        'retention_days' => array(
          'name' => 'retention_days',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Retention Days') ,
          'description' => 'How many days should items be kept for?',
          'required' => true,
          'default' => '30',
        ) ,
        'fetch_frequency' => array(
          'name' => 'fetch_frequency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Fetch Frequency') ,
          'description' => 'How many days should items be kept for?',
          'required' => true,
          'maxlength' => 20,
          'size' => CRM_Utils_Type::MEDIUM,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys() {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'name' => 'name',
        'uri' => 'uri',
        'type' => 'type',
        'last_fetched' => 'last_fetched',
        'retention_days' => 'retention_days',
        'fetch_frequency' => 'fetch_frequency',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['newsstoresource'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['newsstoresource'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
