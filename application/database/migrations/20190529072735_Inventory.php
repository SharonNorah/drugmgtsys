<?php

class Migration_Inventory extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'inventory_id' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            ),
            'drug_code' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'drug_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            ),
            'quantity' => array(
                'type' => 'INT',
                'constraint' => 10
            )
        ));
        $this->dbforge->create_table('inventory');
    }

    public function down() {
        $this->dbforge->drop_table('inventory');
    }

}