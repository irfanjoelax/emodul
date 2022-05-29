<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_submateri extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idsubmtr' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'mtrid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            'namasubmtr' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'isisubmtr' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('idsubmtr', TRUE);
        $this->dbforge->create_table('submateri');
    }

    public function down()
    {
        $this->dbforge->drop_table('submateri');
    }

}

/* End of file create_submateri.php */
