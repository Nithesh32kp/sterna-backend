<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@sterna.com'],
            ['name' => 'Sterna Admin', 'password' => 'Sterna@124']
        );

        if (Location::count() > 0) {
            return;
        }

        $locations = [
            ['Coimbatore Main Store', 'Coimbatore', 'Tamil Nadu', '641001', '+91 422 255 0101', 'active'],
            ['Chennai T. Nagar', 'Chennai', 'Tamil Nadu', '600017', '+91 44 2434 0102', 'active'],
            ['Madurai Meenakshi', 'Madurai', 'Tamil Nadu', '625001', '+91 452 234 0103', 'active'],
            ['Tiruchirappalli Central', 'Tiruchirappalli', 'Tamil Nadu', '620001', '+91 431 241 0104', 'inactive'],
            ['Salem Junction', 'Salem', 'Tamil Nadu', '636001', '+91 427 226 0105', 'active'],
            ['Kochi MG Road', 'Kochi', 'Kerala', '682016', '+91 484 235 0106', 'active'],
            ['Thiruvananthapuram East', 'Thiruvananthapuram', 'Kerala', '695001', '+91 471 233 0107', 'inactive'],
            ['Bengaluru Commercial Street', 'Bengaluru', 'Karnataka', '560001', '+91 80 4112 0108', 'active'],
            ['Mysuru Palace Road', 'Mysuru', 'Karnataka', '570001', '+91 821 242 0109', 'active'],
            ['Hyderabad Abids', 'Hyderabad', 'Telangana', '500001', '+91 40 2320 0110', 'active'],
            ['Visakhapatnam Dwaraka', 'Visakhapatnam', 'Andhra Pradesh', '530016', '+91 891 255 0111', 'inactive'],
            ['Vijayawada Benz Circle', 'Vijayawada', 'Andhra Pradesh', '520010', '+91 866 247 0112', 'active'],
        ];

        foreach ($locations as [$name, $city, $state, $pincode, $phone, $status]) {
            Location::create(compact('name', 'city', 'state', 'pincode', 'phone', 'status'));
        }
    }
}
