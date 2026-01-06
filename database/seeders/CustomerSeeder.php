<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'name' => 'Juan Pérez García',
                'email' => 'juan.perez@example.com',
                'phone' => '5551234567',
                'mobile' => '5559876543',
                'address' => 'Av. Reforma 123',
                'city' => 'Ciudad de México',
                'state' => 'CDMX',
                'zip_code' => '06600',
                'country' => 'México',
                'notes' => 'Cliente frecuente',
                'is_active' => true,
            ],
            [
                'name' => 'María González López',
                'email' => 'maria.gonzalez@example.com',
                'phone' => '5552345678',
                'mobile' => '5558765432',
                'address' => 'Calle Juárez 456',
                'city' => 'Guadalajara',
                'state' => 'Jalisco',
                'zip_code' => '44100',
                'country' => 'México',
                'notes' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Carlos Rodríguez Hernández',
                'email' => 'carlos.rodriguez@example.com',
                'phone' => '5553456789',
                'mobile' => '5557654321',
                'address' => 'Blvd. Hidalgo 789',
                'city' => 'Monterrey',
                'state' => 'Nuevo León',
                'zip_code' => '64000',
                'country' => 'México',
                'notes' => 'Prefiere pagos en efectivo',
                'is_active' => true,
            ],
            [
                'name' => 'Ana Martínez Sánchez',
                'email' => 'ana.martinez@example.com',
                'phone' => '5554567890',
                'mobile' => '5556543210',
                'address' => 'Calle Morelos 321',
                'city' => 'Puebla',
                'state' => 'Puebla',
                'zip_code' => '72000',
                'country' => 'México',
                'notes' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Luis Torres Ramírez',
                'email' => 'luis.torres@example.com',
                'phone' => '5555678901',
                'mobile' => '5555432109',
                'address' => 'Av. Insurgentes 654',
                'city' => 'Querétaro',
                'state' => 'Querétaro',
                'zip_code' => '76000',
                'country' => 'México',
                'notes' => 'Mensualidad activa',
                'is_active' => true,
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
