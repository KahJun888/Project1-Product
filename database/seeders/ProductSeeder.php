<?php
// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('products')->insert([
            [
                'code' => 'P001',
                'name' => 'MASK ADULT Surgical 3 ply 50\'S MEDICOS with box',
                'category' => 'Health Accessories',
                'brand' => 'Medicos',
                'type' => 'Hygiene',
                'description' => 'Colour: Blue (ear loop outside, ear loop inside- random assigned), Green, Purple, White, Lime Green, Yellow, Pink',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P002',
                'name' => 'Party Cosplay Player Unknown Battlegrounds Clothes Hallowmas PUBG',
                'category' => 'Men\'s Clothing',
                'brand' => 'No Brand',
                'type' => null,
                'description' => 'Suitable for adults and children.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P003',
                'name' => 'Xiaomi REDMI 8A Official Global Version 5000 mAh battery champion 31 days 2GB+32GB',
                'category' => 'Mobile & Gadgets',
                'brand' => 'Xiaomi',
                'type' => 'Mobile Phones',
                'description' => 'Xiaomi Redmi 8A',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P004',
                'name' => 'Naelofar Sofis - Printed Square',
                'category' => 'Hijab',
                'brand' => 'Naelofar',
                'type' => 'Multi Colour Floral',
                'description' => 'Ornate Iris flower composition with intricate growing foliage',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P005',
                'name' => 'Philips HR2051 / HR2056 / HR2059 Ice Crushing Blender Jar Mill',
                'category' => 'Small Kitchen Appliances',
                'brand' => 'Philips',
                'type' => 'Mixers & Blenders',
                'description' => 'Philips HR2051 Blender (350W, 1.25L Plastic Jar, 4 stars stainless steel blade)',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P006',
                'name' => 'Gemei GM-6005 Rechargeable Trimmer Hair Cutter Machine',
                'category' => 'Hair Styling Tools',
                'brand' => 'Gemei',
                'type' => 'Trimmer',
                'description' => 'The GEMEI hair clipper is intended for professional use.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P007',
                'name' => 'Oreo Crumb Small Crushed Cookie Pieces 454g',
                'category' => 'Snacks',
                'brand' => 'Oreo',
                'type' => 'Biscuits & Cookies',
                'description' => 'Oreo Crumb Small Crushed Cookie Pieces 454g - Retail & Wholesale New Stock Long Expiry!!!',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P008',
                'name' => 'Non-contact Infrared Forehead Thermometer ABS',
                'category' => 'Kids Health & Skincare',
                'brand' => 'No Brand',
                'type' => null,
                'description' => 'Non-contact Infrared Forehead Thermometer ABS for Adults and Children with LCD Display Digital',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P009',
                'name' => 'Nordic Marble Starry Sky Bedding Sets',
                'category' => 'Bedding',
                'brand' => 'No Brand',
                'type' => 'Bedding Sheets',
                'description' => 'Printing process: reactive printing. Package：quilt cover ,bed sheet ,pillow case. Not include comforter or quilt.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P010',
                'name' => 'Samsung Galaxy Tab A 10.1"',
                'category' => 'Mobile & Gadgets',
                'brand' => 'Samsung',
                'type' => 'Tablets',
                'description' => ' 4GB RAM. - 64GB ROM. - 1.5 ghz Processor. - 10.1 inches LCD Display',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P011',
                'name' => 'REALME 5 PRO 6+128GB',
                'category' => 'Mobile & Gadgets',
                'brand' => 'Realme',
                'type' => 'Mobile Phones',
                'description' => 'REALME 5 PRO 6+128GB',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P012',
                'name' => 'Nokia 2.3 - Cyan Green',
                'category' => 'Mobile & Gadgets',
                'brand' => 'Nokia',
                'type' => 'Mobile Phones',
                'description' => 'Nokia smartphones get 2 years of software upgrades and 3 years of monthly security updates.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P013',
                'name' => 'AKEMI Cotton Select Fitted Bedsheet Set - Adore 730TC',
                'category' => 'Bedding',
                'brand' => 'Akemi',
                'type' => 'Bedding Sheets',
                'description' => '100% Cotton Twill. Super Single.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P014',
                'name' => 'Samsung Note10+ Phone',
                'category' => 'Mobile & Gadgets',
                'brand' => 'OEM',
                'type' => 'Mobile Phones',
                'description' => 'OEM Phone Models',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'P015',
                'name' => 'Keknis Basic Wide Long Shawl',
                'category' => 'Hijab',
                'brand' => 'No Brand',
                'type' => 'Plain Shawl',
                'description' => '1.8m × 0.7m (+/-). Heavy chiffon (120 gsm).',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
