<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 0.9.4
// Source: Control.proto
//   Date: 2016-08-05 18:35:13

namespace Ricochet\Channel\Control\Proto {

  class FeaturesEnabled extends \DrSlump\Protobuf\Message {

    /**  @var string[]  */
    public $feature = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Ricochet.Channel.Control.FeaturesEnabled');

      // REPEATED STRING feature = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "feature";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <feature> has a value
     *
     * @return boolean
     */
    public function hasFeature(){
      return $this->_has(1);
    }
    
    /**
     * Clear <feature> value
     *
     * @return \Ricochet\Channel\Control\Proto\FeaturesEnabled
     */
    public function clearFeature(){
      return $this->_clear(1);
    }
    
    /**
     * Get <feature> value
     *
     * @param int $idx
     * @return string
     */
    public function getFeature($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <feature> value
     *
     * @param string $value
     * @return \Ricochet\Channel\Control\Proto\FeaturesEnabled
     */
    public function setFeature( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <feature>
     *
     * @return string[]
     */
    public function getFeatureList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <feature>
     *
     * @param string $value
     * @return \Ricochet\Channel\Control\Proto\FeaturesEnabled
     */
    public function addFeature( $value){
     return $this->_add(1, $value);
    }
  }
}

