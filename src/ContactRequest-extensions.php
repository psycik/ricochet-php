<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 0.9.4
// Source: ContactRequest.proto
//   Date: 2016-08-05 18:35:13

namespace {
  \Ricochet\Channel\Control\Proto\OpenChannel::extension(function(){
      // OPTIONAL MESSAGE Ricochet\Channel\ContactRequest\Proto\contact_request = 200
    $f = new \DrSlump\Protobuf\Field();
    $f->number    = 200;
    $f->name      = 'Ricochet\Channel\ContactRequest\Proto\contact_request';
    $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
    $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
    $f->reference = '\Ricochet\Channel\ContactRequest\Proto\ContactRequest';
    return $f;
  });
  \Ricochet\Channel\Control\Proto\ChannelResult::extension(function(){
      // OPTIONAL MESSAGE Ricochet\Channel\ContactRequest\Proto\response = 201
    $f = new \DrSlump\Protobuf\Field();
    $f->number    = 201;
    $f->name      = 'Ricochet\Channel\ContactRequest\Proto\response';
    $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
    $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
    $f->reference = '\Ricochet\Channel\ContactRequest\Proto\Response';
    return $f;
  });
}
