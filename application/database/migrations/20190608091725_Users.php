<?php

class Migration_Users extends CI_Migration {

    public function up() {
        $fields = array(
            'center_code' => array('type' => 'TEXT')
    );
    $this->dbforge->add_column('users', $fields);
    }

}