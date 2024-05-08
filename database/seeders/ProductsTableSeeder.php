<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
  /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Smartphone Samsung Galaxy S21',
                'description' => 'Teléfono inteligente con pantalla Dynamic AMOLED de 6.2", procesador Exynos 2100, cámara triple de 12 MP y batería de 4000 mAh.',
                'price' => 799.99,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Portátil HP Pavilion 15',
                'description' => 'Portátil con pantalla FHD de 15.6", procesador Intel Core i5, 8 GB de RAM, SSD de 512 GB y tarjeta gráfica NVIDIA GeForce GTX 1650.',
                'price' => 899.99,
                'stock' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smart TV Sony Bravia XR55A90J',
                'description' => 'Televisor OLED de 55" con resolución 4K, HDR Dolby Vision, sistema operativo Google TV y procesador Cognitive Processor XR.',
                'price' => 1999.99,
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Consola Sony PlayStation 5',
                'description' => 'Consola de videojuegos de próxima generación con gráficos 4K, SSD ultra rápido y controlador DualSense.',
                'price' => 499.99,
                'stock' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tablet Samsung Galaxy Tab S7',
                'description' => 'Tablet con pantalla LTPS de 11", procesador Snapdragon 865+, 6 GB de RAM, almacenamiento de 128 GB y S Pen incluido.',
                'price' => 649.99,
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Auriculares Bose QuietComfort 45',
                'description' => 'Auriculares inalámbricos con cancelación de ruido, sonido envolvente, hasta 24 horas de autonomía de batería y Bluetooth 5.1.',
                'price' => 329.99,
                'stock' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cámara Canon EOS R6',
                'description' => 'Cámara mirrorless con sensor CMOS de 20.1 MP, grabación de vídeo 4K, estabilización de imagen de 5 ejes y enfoque automático Dual Pixel CMOS AF II.',
                'price' => 2499.99,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Router TP-Link Archer AX73',
                'description' => 'Router Wi-Fi 6 con velocidad de hasta 5400 Mbps, triple antena externa, tecnología Beamforming y puertos Gigabit Ethernet.',
                'price' => 199.99,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Monitor LG UltraGear 27GN800-B',
                'description' => 'Monitor gaming de 27" con resolución QHD, frecuencia de actualización de 144 Hz, tecnología IPS y compatibilidad con NVIDIA G-SYNC.',
                'price' => 349.99,
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Altavoz Bluetooth JBL Charge 5',
                'description' => 'Altavoz portátil con sonido envolvente JBL Pro, certificación IP67, hasta 20 horas de autonomía de batería y función de carga inalámbrica.',
                'price' => 179.99,
                'stock' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
