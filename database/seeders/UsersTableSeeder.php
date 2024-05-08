<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'María',
                'first_surname' => 'García',
                'second_surname' => 'Pérez',
                'email' => 'maria.garcia@example.com',
                'dni' => '12345678A',
                'postal_code' => '29001',
                'city' => 'Málaga',
                'password' => Hash::make('password1234'),
                'address' => 'Calle Mayor, 123',
                'phone_number' => '123456789',
                'birthdate' => '1990-05-15',
                'profile_picture' => 'https://via.placeholder.com/150',
                'role' => 'customer',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Juan',
                'first_surname' => 'Rodríguez',
                'second_surname' => 'López',
                'email' => 'juan.rodriguez@example.com',
                'dni' => '23456789B',
                'postal_code' => '29002',
                'city' => 'Málaga',
                'password' => Hash::make('password1234'),
                'address' => 'Avenida Libertad, 456',
                'phone_number' => '987654321',
                'birthdate' => '1985-09-22',
                'profile_picture' => 'https://via.placeholder.com/150',
                'role' => 'admin',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laura',
                'first_surname' => 'Martínez',
                'second_surname' => 'Sánchez',
                'email' => 'laura.martinez@example.com',
                'dni' => '34567890C',
                'postal_code' => '29003',
                'city' => 'Málaga',
                'password' => Hash::make('password1234'),
                'address' => 'Plaza España, 789',
                'phone_number' => '654321987',
                'birthdate' => '1995-02-10',
                'profile_picture' => 'https://via.placeholder.com/150',
                'role' => 'customer',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos',
                'first_surname' => 'Fernández',
                'second_surname' => 'Gómez',
                'email' => 'carlos.fernandez@example.com',
                'dni' => '45678901D',
                'postal_code' => '29004',
                'city' => 'Málaga',
                'password' => Hash::make('password1234'),
                'address' => 'Calle Real, 234',
                'phone_number' => '789456123',
                'birthdate' => '1980-11-30',
                'profile_picture' => 'https://via.placeholder.com/150',
                'role' => 'customer',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Elena',
                'first_surname' => 'López',
                'second_surname' => 'Martínez',
                'email' => 'elena.lopez@example.com',
                'dni' => '56789012E',
                'postal_code' => '29005',
                'city' => 'Málaga',
                'password' => Hash::make('password1234'),
                'address' => 'Avenida Andalucía, 567',
                'phone_number' => '321654987',
                'birthdate' => '1998-07-20',
                'profile_picture' => 'https://via.placeholder.com/150',
                'role' => 'customer',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
