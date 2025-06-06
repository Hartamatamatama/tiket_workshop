<?php
namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder {
    public function run() {
        \DB::table('payment_methods')->insert([
    [
        'account_number' => '123456781',
        'account_name'   => 'PT Ramagix',
        'name'           => 'BCA',
        'created_at'     => now(),
        'updated_at'     => now(),
    ],
    [
        'account_number' => '123456782',
        'account_name'   => 'PT Ramagix',
        'name'           => 'BNI',
        'created_at'     => now(),
        'updated_at'     => now(),
    ],
    [
        'account_number' => '123456783',
        'account_name'   => 'PT Ramagix',
        'name'           => 'Mandiri',
        'created_at'     => now(),
        'updated_at'     => now(),
    ],
    [
        'account_number' => '123456784',
        'account_name'   => 'PT Ramagix',
        'name'           => 'BRI',
        'created_at'     => now(),
        'updated_at'     => now(),
    ],
    [
        'account_number' => '123456785',
        'account_name'   => 'PT Ramagix',
        'name'           => 'OVO',
        'created_at'     => now(),
        'updated_at'     => now(),
    ],
    [
        'account_number' => '123456786',
        'account_name'   => 'PT Ramagix',
        'name'           => 'Gopay',
        'created_at'     => now(),
        'updated_at'     => now(),
    ],
]);

    }
}
