<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'My Portofolio',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_location',
            'label' => 'Alamat',
            'value' => 'Kota Padang, Padang, Indonesia',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_whatsapp',
            'label' => 'Whatsapp',
            'value' => 'https://wa.me/628127194565',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'http://www.youtube.com/@aldekiadia5714',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/alkyeye?igsh=aHNjbDZjNGJtN3R2&utm_source=qr',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_tiktok',
            'label' => 'Tiktok',
            'value' => 'https://www.tiktok.com/@avkingdom?_t=8kAhsR0VGLK&_r=1',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_site_description',
            'label' => 'Site Deskripsion',
            'value' => 'Website Portofolio, Aldeki Adia 21076082, Universitas Negeri Padang',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
