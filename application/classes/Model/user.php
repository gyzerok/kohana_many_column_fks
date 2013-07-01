<?php
defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Base {
    protected $_table_name = 'users';

    protected $_has_many = array(
        'blogposts' => array(
            'model' => 'blogpost',
            'foreign_key' => array(
                'entity_id' => 'entity_id',
                'xreference' => 'users'
            )
        )
    );
}