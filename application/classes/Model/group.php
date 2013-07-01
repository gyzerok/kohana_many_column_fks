<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Group extends Model_Base {
    protected $_table_name = 'groups';

    protected $_has_many = array(
        'blog_posts' => array(
            'model' => 'blog_post',
            'foreign_key' => array(
                'entity_id' => 'entity_id',
                'xreference' => 'groups'
            )
        )
    );
}
