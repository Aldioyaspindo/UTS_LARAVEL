<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\donasi>
 */
class DonasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_donatur' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'nominal' => fake()->numberBetween(100000, 1000000),
            'metode_pembayaran' => fake()->randomElement(['BRI', 'BNI', 'Mandiri', 'DANA', 'BCA', 'OVO','Gopay']),
            'tanggal_donasi' => fake()->date(), // Menghasilkan tanggal dalam format Y-m-d
            'dukungan_doa' => fake()->randomElement(['Selamat', 'sejahtera', 'sehat sehat']),
            'status' => fake()->randomElement(['Menunggu Konfirmasi', 'Dikonfirmasi', 'Batal'])

        ];
    }
}
