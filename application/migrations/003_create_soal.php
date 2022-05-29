<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_soal extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idsoal' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'tnysoal' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'asoal' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => TRUE,
            ),
            'bsoal' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => TRUE,
            ),
            'csoal' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => TRUE,
            ),
            'dsoal' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => TRUE,
            ),
            'esoal' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => TRUE,
            ),
            'gmbrsoal' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'kncsoal' => array(
                'type' => 'VARCHAR',
                'constraint' => '5',
                'null' => TRUE,
            ),
            'aktfsoal' => array(
                'type' => 'VARCHAR',
                'constraint' => '5',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('idsoal', TRUE);
        $this->dbforge->create_table('soal');
    }

    public function down()
    {
        $this->dbforge->drop_table('soal');
    }

}

/* End of file create_soal.php */
