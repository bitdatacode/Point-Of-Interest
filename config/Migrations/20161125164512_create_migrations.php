<?php

use Phinx\Migration\AbstractMigration;

class CreateMigrations extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        
        $table = $this->table('users');
        $table->addColumn('first_name', 'string', [
			'limit' => 50
        ]);
		 $table->addColumn('last_name', 'string', [
            'limit' => 100
        ]);
        $table->addColumn('email', 'string', [
		 'limit' => 100
         ]);
		 $table->addColumn('password', 'string');
		 $table->addColumn('role', 'enum', array('values' => 'administrador, colaborador'));
		 
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();


$table = $this->table('countries');
       $table->addColumn('name', 'string');
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
    $table->create();


	
$table = $this->table('regions');
    
    $table->addColumn('name', 'string');
     $table->addColumn('description', 'text', [
            'default' => null,
            'null' => false,	
		]);			
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
		$table->addColumn('country_id', 'integer');
		$table->addForeignKey('country_id', 'countries', 'id');
     $table->create();

	 
	 
$table = $this->table('provinces');
		$table->addColumn('name', 'string');

		$table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
		$table->addColumn('regions_id', 'integer');
		$table->addForeignKey('regions_id', 'regions', 'id');
     $table->create();
	 	 	


$table = $this->table('groups');
		 $table->addColumn('name', 'string');
		
		$table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
		
		$table->addColumn('provinces_id', 'integer');
		$table->addForeignKey('provinces_id', 'provinces', 'id');
     $table->create();	 
	 
	 

$table = $this->table('municipalites');
    
		$table->addColumn('name', 'string');
		$table->addColumn('description1', 'text', [
            'default' => null,
            'null' => false,	
		]);	
		$table->addColumn('description2', 'text', [
            'default' => null,
            'null' => false,	
		]);		
		$table->addColumn('slogan1', 'string', ['limit' => 200 ]);
		$table->addColumn('slogan2', 'string', ['limit' => 200 ]);
		$table->addColumn('puntuation1', 'integer');
		$table->addColumn('puntuation2', 'integer');
		$table->addColumn('puntuation3', 'integer');
		$table->addColumn('name_puntuation1', 'string', ['limit' => 45 ]);
		$table->addColumn('name_puntuation2', 'string', ['limit' => 45 ]);
		$table->addColumn('name_puntuation3', 'string', ['limit' => 45 ]);
		$table->addColumn('photo', 'string');
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
		$table->addColumn('groups_id', 'integer');
		$table->addForeignKey('groups_id', 'groups', 'id');
     $table->create();	 
	 
	 
	 
$table = $this->table('pointofinterestes');	 
		$table->addColumn('name', 'string');
		$table->addColumn('slogan1', 'string', ['limit' => 50 ]);
		$table->addColumn('description1', 'text', [
            'default' => null,
            'null' => false,	
		]);	
		$table->addColumn('description2', 'text', [
            'default' => null,
            'null' => false,	
		]);
		$table->addColumn('titele1', 'string', ['limit' => 200 ]);
		$table->addColumn('titele2', 'string', ['limit' => 200 ]);
		$table->addColumn('price', 'float');
		$table->addColumn('horario', 'string', ['limit' => 100 ]);
		$table->addColumn('photo', 'string');
		$table->addColumn('address', 'string', ['limit' => 100 ]);
	
		$table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
		
		$table->addColumn('users_id', 'integer');
		$table->addForeignKey('users_id', 'users', 'id');
		$table->addColumn('municipalites_id', 'integer');
		$table->addForeignKey('municipalites_id', 'municipalites', 'id');
		
	   $table->create();

	   
	   
	   
$table = $this->table('coments');
	$table->addColumn('coment', 'text', [
            'default' => null,
            'null' => false,	
		]);

	$table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
			$table->addColumn('users_id', 'integer');
			$table->addColumn('municipalites_id', 'integer');
		   $table->addForeignKey('users_id', 'users', 'id');
		   $table->addForeignKey('municipalites_id', 'municipalites', 'id');
	$table->create();

    }
}
