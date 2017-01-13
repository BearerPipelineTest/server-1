<?php

/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 02.01.17
 * Time: 23:57
 */

namespace DBA;

class SuperHashlistHashlistFactory extends AbstractModelFactory {
  function getModelName() {
    return "SuperHashlistHashlist";
  }
  
  function getModelTable() {
    return "SuperHashlistHashlist";
  }
  
  function isCachable() {
    return false;
  }
  
  function getCacheValidTime() {
    return -1;
  }

  /**
   * @return SuperHashlistHashlist
   */
  function getNullObject() {
    $o = new SuperHashlistHashlist(-1, null, null);
    return $o;
  }

  /**
   * @param string $pk
   * @param array $dict
   * @return SuperHashlistHashlist
   */
  function createObjectFromDict($pk, $dict) {
    $o = new SuperHashlistHashlist($pk, $dict['superHashlistId'], $dict['hashlistId']);
    return $o;
  }

  /**
   * @param array $options
   * @param bool $single
   * @return SuperHashlistHashlist|SuperHashlistHashlist[]
   */
  function filter($options, $single = false) {
    if($single){
      return Util::cast(parent::filter($options, $single), SuperHashlistHashlist::class);
    }
    $objects = parent::filter($options, $single);
    $models = array();
    foreach($objects as $object){
      $models[] = Util::cast($object, SuperHashlistHashlist::class);
    }
    return $models;
  }

  /**
   * @param string $pk
   * @return SuperHashlistHashlist
   */
  function get($pk) {
    return Util::cast(parent::get($pk), SuperHashlistHashlist::class);
  }

  /**
   * @param SuperHashlistHashlist $model
   * @return SuperHashlistHashlist
   */
  function save($model) {
    return Util::cast(parent::save($model), SuperHashlistHashlist::class);
  }
}