<?php

class Migration_Drug extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'drug_code' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'drug_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            )
            ,
            'strength' => array(
                'type' => 'VARCHAR',
                'constraint' => 10
            ),
            'category' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            )
            ,
            'unit_pack' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('drug');
    }

    public function down() {
        $this->dbforge->drop_table('drug');
    }

}