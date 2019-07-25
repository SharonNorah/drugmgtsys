<?php

class Migration_inventories extends CI_Migration {

    public function up() {
        $fields = array(
            'current_quantity' => array(
                'type' => 'INT',
                'constraint' => 10
                )
    );
    $this->dbforge->add_column('inventories', $fields);
    }

}