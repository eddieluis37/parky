<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::create([
            'name' => 'Parky',
            'business_name' => 'Parky Estacionamientos S.A. de C.V.',
            'rfc' => 'PES240101ABC',
            'email' => 'info@parky.com',
            'phone' => '5551234567',
            'mobile' => '5559876543',
            'website' => 'https://parky.com',
            'address' => 'Av. Principal 123',
            'city' => 'Ciudad de México',
            'state' => 'CDMX',
            'country' => 'México',
            'postal_code' => '06600',
            'logo_path' => null,
            'logo_url' => null,
            'receipt_footer' => '¡Gracias por su preferencia!',
            'receipt_terms' => 'No nos hacemos responsables por objetos dejados en el vehículo',
            'show_logo_on_receipt' => true,
            'timezone' => 'America/Mexico_City',
            'currency' => 'MXN',
            'currency_symbol' => '$',
            'is_active' => true,
        ]);
    }
}
