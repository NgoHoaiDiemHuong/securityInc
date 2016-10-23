<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('CustomersDatabaseSeeder');

        Model::reguard();
    }
}

class CustomersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('vi_VN');
     
        
       
        for($i=0;$i<100;$i++){
            $name=$faker->name;
            $customer = App\Customer::create([
                'name'=> $name,
                'birthday'=>$faker->date($format = 'Y-m-d', $max = '-18 years'),
                'identity_card_number'=>$faker->taxpayerIdentificationNumber,
                'company'=>$faker->company,
                'phone_number'=>$faker->phoneNumber,
                'email'=>$faker->email,
                'description'=>$faker->text,
                'keywords'=>$name,
                'address'=>$faker->address
                ]);

        }

    }
}
