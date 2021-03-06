<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 0.9.4
// Source: Chat.proto
//   Date: 2016-08-05 18:35:13

namespace Ricochet\Channel\Chat\Proto {

  class Packet extends \DrSlump\Protobuf\Message {

    /**  @var \Ricochet\Channel\Chat\Proto\ChatMessage */
    public $chat_message = null;
    
    /**  @var \Ricochet\Channel\Chat\Proto\ChatAcknowledge */
    public $chat_acknowledge = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Ricochet.Channel.Chat.Packet');

      // OPTIONAL MESSAGE chat_message = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "chat_message";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Ricochet\Channel\Chat\Proto\ChatMessage';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE chat_acknowledge = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "chat_acknowledge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Ricochet\Channel\Chat\Proto\ChatAcknowledge';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <chat_message> has a value
     *
     * @return boolean
     */
    public function hasChatMessage(){
      return $this->_has(1);
    }
    
    /**
     * Clear <chat_message> value
     *
     * @return \Ricochet\Channel\Chat\Proto\Packet
     */
    public function clearChatMessage(){
      return $this->_clear(1);
    }
    
    /**
     * Get <chat_message> value
     *
     * @return \Ricochet\Channel\Chat\Proto\ChatMessage
     */
    public function getChatMessage(){
      return $this->_get(1);
    }
    
    /**
     * Set <chat_message> value
     *
     * @param \Ricochet\Channel\Chat\Proto\ChatMessage $value
     * @return \Ricochet\Channel\Chat\Proto\Packet
     */
    public function setChatMessage(\Ricochet\Channel\Chat\Proto\ChatMessage $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <chat_acknowledge> has a value
     *
     * @return boolean
     */
    public function hasChatAcknowledge(){
      return $this->_has(2);
    }
    
    /**
     * Clear <chat_acknowledge> value
     *
     * @return \Ricochet\Channel\Chat\Proto\Packet
     */
    public function clearChatAcknowledge(){
      return $this->_clear(2);
    }
    
    /**
     * Get <chat_acknowledge> value
     *
     * @return \Ricochet\Channel\Chat\Proto\ChatAcknowledge
     */
    public function getChatAcknowledge(){
      return $this->_get(2);
    }
    
    /**
     * Set <chat_acknowledge> value
     *
     * @param \Ricochet\Channel\Chat\Proto\ChatAcknowledge $value
     * @return \Ricochet\Channel\Chat\Proto\Packet
     */
    public function setChatAcknowledge(\Ricochet\Channel\Chat\Proto\ChatAcknowledge $value){
      return $this->_set(2, $value);
    }
  }
}

