<?php

use Cake\Auth\DefaultPasswordHasher;
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {   

        $user = $this->fetchRow("select id from users where username='admin'");
        if($user) {
            print "User admin is already created!";
            return;
        }

        $data = [
            'name'=>"admin",
            'username' => "admin",
            'is_active' => true,
            'is_admin' => true,
            'password' => november2016
        ];

        $table = $this->table('users');
        $hasher = new DefaultPasswordHasher();
        $data['password'] = $hasher->hash($data['password']);
        $table->insert($data)->save();
    }

}
