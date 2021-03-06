<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Content_type_model extends App_Model {

  public $fields = array(
      array('name' => 'id', 'type' => 'integer', 'require' => TRUE, 'primary_key' => TRUE, 'auto_increment' => TRUE),
      array('name' => 'content_id', 'type' => 'integer', 'index' => TRUE),
      array('name' => 'type_id', 'type' => 'integer', 'index' => TRUE),
      array('name' => 'created_at', 'type' => 'datetime'),
      array('name' => 'updated_at', 'type' => 'datetime'),
  );
  public $belongs_to = array(
      'content',
      'type'
  );

  function get_content_types($content_id = NULL) {
    $content_types = $this->find('all', array(
        'fields' => array('type'),
        'from' => 'content_type',
        'join' => array(
            'type' => array('left' => 'content_types.type_id = types.id')
        ),
        'condition' => array(
            'content_type' => array(
                'content_id' => $content_id
            )
        )
    ));
    return $content_types;
  }

}

?>