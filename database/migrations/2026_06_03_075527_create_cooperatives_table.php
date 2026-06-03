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
        Schema::table('cooperatives', function (Blueprint $table) {
            $table->string('cda_no')->nullable();
            $table->string('herd_code')->nullable();
            $table->string('name')->nullable();
            $table->string('accreditation_status')->nullable();
            $table->string('type')->nullable();
            $table->string('category')->nullable();
            $table->date('date_established')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('barangay')->nullable();
            $table->text('address')->nullable();
            $table->string('year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cooperatives');
    }
};
