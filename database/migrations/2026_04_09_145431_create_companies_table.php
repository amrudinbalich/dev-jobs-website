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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();
            $table->text('description')->nullable();
            
            $table->enum('size', [
                '1-10', 
                '11-50', 
                '51-200', 
                '201-500', 
                '501-1000', 
                '1001-5000'
            ])->default('1-10');

            $table->string('logo_url')->nullable();
            $table->string('website_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
