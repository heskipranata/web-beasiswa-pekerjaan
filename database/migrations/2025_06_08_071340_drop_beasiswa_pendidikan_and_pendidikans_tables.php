<?php

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
        Schema::dropIfExists('beasiswa_pendidikan');
        Schema::dropIfExists('pendidikans');
    }

    public function down(): void
    {
        // (optional) You can recreate the tables here if needed
    }


};
