<?php

/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 02.01.17
 * Time: 23:57
 */

namespace DBA;

class UserFactory extends AbstractModelFactory {
  function getModelName() {
    return "User";
  }
  
  function getModelTable() {
    return "User";
  }
  
  function isCachable() {
    return false;
  }
  
  function getCacheValidTime() {
    return -1;
  }

  /**
   * @return User
   */
  function getNullObject() {
    $o = new User(-1, null, null, null, null, null, null, null, null, null, null);
    return $o;
  }

  /**
   * @param string $pk
   * @param array $dict
   * @return User
   */
  function createObjectFromDict($pk, $dict) {
    $o = new User($pk, $dict['username'], $dict['email'], $dict['passwordHash'], $dict['passwordSalt'], $dict['isValid'], $dict['isComputedPassword'], $dict['lastLoginDate'], $dict['registeredSince'], $dict['sessionLifetime'], $dict['rightGroupId']);
    return $o;
  }

  /**
   * @param array $options
   * @param bool $single
   * @return User|User[]
   */
  function filter($options, $single = false) {
    if($single){
      return Util::cast(parent::filter($options, $single), User::class);
    }
    $objects = parent::filter($options, $single);
    $models = array();
    foreach($objects as $object){
      $models[] = Util::cast($object, User::class);
    }
    return $models;
  }

  /**
   * @param string $pk
   * @return User
   */
  function get($pk) {
    return Util::cast(parent::get($pk), User::class);
  }

  /**
   * @param User $model
   * @return User
   */
  function save($model) {
    return Util::cast(parent::save($model), User::class);
  }
}