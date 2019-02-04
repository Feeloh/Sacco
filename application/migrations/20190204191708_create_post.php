 <?php
 defined('BASEPATH') OR exit ('No direct script access allowed');

 class Migration_Create_Post extends CI_Migration
 {
     public function up(){
        $this->dbforge->add_field(array(
            'post_id' => array(
            'type' =>'INT',
            'constraint' => 1,
            'unsigned' => true,
            'auto_increment' => true
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'body' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_key('post_id', true);
        $this->dbforge->create_table('post', true);
     }

     public function down(){
        $this->dbforge->droptable('post');
     }
 }
 ?>