<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_pengaturan extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idptr' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'kmptnsiptr' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'tjnptr' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'bntnptr' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('idptr', TRUE);
        $this->dbforge->create_table('pengaturan');
    }

    public function down()
    {
        $this->dbforge->drop_table('pengaturan');
    }
}

/* End of file create_pengaturan.php */
