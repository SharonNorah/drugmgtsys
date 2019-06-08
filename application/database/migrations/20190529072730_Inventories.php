<?php

class Migration_Inventories extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'inventory_id' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            ),
            'transaction_date' => array(
                'type' => 'DATETIME'
            )
            ,
            'quantity' => array(
                'type' => 'INT',
                'constraint' => 10
            ),
            'expiry_date' => array(
                'type' => 'DATETIME'
            )
            ,
            'source' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            )
        ));
        $this->dbforge->add_key('inventory_id', TRUE);
        $this->dbforge->create_table('inventories');
    }

    public function down() {
        $this->dbforge->drop_table('inventories');
    }

}