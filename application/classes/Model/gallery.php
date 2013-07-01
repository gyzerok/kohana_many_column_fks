<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Gallery extends Model_ORM_Decorator {
    protected $_table_name = 'galleries';

    public function __construct($model)
    {
        parent::__construct($model);
    }
}
