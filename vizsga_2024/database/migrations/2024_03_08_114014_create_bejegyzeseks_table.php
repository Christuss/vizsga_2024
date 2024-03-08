<?php

use App\Models\Bejegyzesek;
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
        Schema::create('bejegyzeseks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenysegs');
            $table->integer('osztaly_id');
            $table->boolean('allapot');
            $table->timestamps();
        });

        Bejegyzesek::create(['tevekenyseg_id' => 1, 'osztaly_id' => 1, 'allapot' => false]);
        Bejegyzesek::create(['tevekenyseg_id' => 2, 'osztaly_id' => 2, 'allapot' => false]);
        Bejegyzesek::create(['tevekenyseg_id' => 3, 'osztaly_id' => 3, 'allapot' => false]);
        Bejegyzesek::create(['tevekenyseg_id' => 4, 'osztaly_id' => 4, 'allapot' => true]);
        Bejegyzesek::create(['tevekenyseg_id' => 5, 'osztaly_id' => 5, 'allapot' => true]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzeseks');
    }
};
