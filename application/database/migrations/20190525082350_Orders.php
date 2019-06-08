<?php

class Migration_Orders extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'order_id' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'drug_code' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            )
            ,
            'quantity' => array(
                'type' => 'INT',
                'constraint' => 10
            ),
            'order_date' => array(
                'type' => 'DATETIME'
            )
            ,
            'sender' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            ),
            'supplier' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            ),
            'delivery_date' => array(
                'type' => 'DATETIME'
            )
        ));
        $this->dbforge->add_key('order_id', TRUE);
        $this->dbforge->create_table('orders');
    }

    public function down() {
        $this->dbforge->drop_table('orders');
    }

}