<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_nilai extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idnli' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'userid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),
            'hasilnli' => array(
                'type' => 'INT',
                'constraint' => 3,
                'unsigned' => TRUE,
            ),
            'wktnli' => array(
                'type' => 'TIME',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('idnli', TRUE);
        $this->dbforge->create_table('nilai');
    }

    public function down()
    {
        $this->dbforge->drop_table('nilai');
    }

}

/* End of file create_nilai.php */
