<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_materi extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idmtr' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'namamtr' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('idmtr', TRUE);
        $this->dbforge->create_table('materi');
    }

    public function down()
    {
        $this->dbforge->drop_table('materi');
    }

}

/* End of file create_materi.php */
