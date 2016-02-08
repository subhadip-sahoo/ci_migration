<?php
class Migration_posts extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(
           array(
              'id_post' => array(
                 'type' => 'INT',
                 'constraint' => 5,
                 'unsigned' => true,
                 'auto_increment' => true
              ),
              'post_name' => array(
                 'type' => 'VARCHAR',
                 'constraint' => '100',
              ),
              'post_content' => array(
                 'type' => 'TEXT',
                 'null' => true,
              ),
           )
        );

        $this->dbforge->add_key('id_post', TRUE);
        $this->dbforge->create_table('posts');
    }

    public function down()
    {
        $this->dbforge->drop_table('posts');
    }
}