<?php

class Migration_inventory extends CI_Migration {

    public function up() {
        $fields = array(
            'current_quantity' => array(
                'type' => 'INT',
                'constraint' => 10
                )
    );
    $this->dbforge->add_column('inventory', $fields);
    }

}