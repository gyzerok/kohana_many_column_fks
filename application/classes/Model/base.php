<?php

class Model_Base extends ORM {
    public function get($column)
    {
        if (isset($this->_has_many[$column]))
        {
            if (!isset($this->_has_many[$column]['through']))
            {
                // Simple has_many relationship, search where target model's foreign key is this model's primary key
                if (is_array($this->_has_many[$column]['foreign_key']))
                {
                    $xref = $this->_has_many[$column]['foreign_key']['xreference'];
                    $model = ORM::factory($this->_has_many[$column]['model'])
                        ->where($this->_has_many[$column]['foreign_key']['entity_id'], '=', $this->pk())
                        ->and_where('xreference', '=', $xref);

                    return $model;
                }
            }
        }
        else
        {
            return parent::get($column);
        }
    }
}
