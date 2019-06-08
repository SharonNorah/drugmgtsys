<?php

class Migration_Order extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'order_id' => array(
                'type' => 'INT',
                'constraint' => 11
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
            ),
            
        ));
        $this->dbforge->create_table('order');
    }

    public function down() {
        $this->dbforge->drop_table('order');
    }

}