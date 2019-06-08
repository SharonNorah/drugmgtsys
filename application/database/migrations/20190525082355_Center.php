<?php

class Migration_Center extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'center_code' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'center_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            )
            ,
            'district' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'level' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            )
        ));
        $this->dbforge->add_key('center_code', TRUE);
        $this->dbforge->create_table('center');
    }

    public function down() {
        $this->dbforge->drop_table('center');
    }

}