<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Eloquent::unguard();
		$this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
	}

}

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();
        $users = array(
            array(
                'email' => 'nathan@docker.com',
                'name' => 'Nathan LeClaire',
            ),
            array(
                'email' => 'sven@docker.com',
                'name' => 'Sven Dowideit',
            ),
            array(
                'email' => 'jerome@docker.com',
                'name' => 'Jérôme Petazzoni',
            )
        );
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
