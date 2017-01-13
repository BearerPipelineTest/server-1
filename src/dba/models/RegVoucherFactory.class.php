<?php

/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 02.01.17
 * Time: 23:57
 */

namespace DBA;

class RegVoucherFactory extends AbstractModelFactory {
  function getModelName() {
    return "RegVoucher";
  }
  
  function getModelTable() {
    return "RegVoucher";
  }
  
  function isCachable() {
    return false;
  }
  
  function getCacheValidTime() {
    return -1;
  }

  /**
   * @return RegVoucher
   */
  function getNullObject() {
    $o = new RegVoucher(-1, null, null);
    return $o;
  }

  /**
   * @param string $pk
   * @param array $dict
   * @return RegVoucher
   */
  function createObjectFromDict($pk, $dict) {
    $o = new RegVoucher($pk, $dict['voucher'], $dict['time']);
    return $o;
  }

  /**
   * @param array $options
   * @param bool $single
   * @return RegVoucher|RegVoucher[]
   */
  function filter($options, $single = false) {
    if($single){
      return Util::cast(parent::filter($options, $single), RegVoucher::class);
    }
    $objects = parent::filter($options, $single);
    $models = array();
    foreach($objects as $object){
      $models[] = Util::cast($object, RegVoucher::class);
    }
    return $models;
  }

  /**
   * @param string $pk
   * @return RegVoucher
   */
  function get($pk) {
    return Util::cast(parent::get($pk), RegVoucher::class);
  }

  /**
   * @param RegVoucher $model
   * @return RegVoucher
   */
  function save($model) {
    return Util::cast(parent::save($model), RegVoucher::class);
  }
}