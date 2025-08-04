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
         Schema::create('Job_Listings', function (Blueprint $table) {
        $table->id();
        $table->foreignIdFor(\App\Models\Employeer::class);
        $table->string('title');
        $table->string('salary', 8, 2);
        $table->string('nationality');
        $table->timestamps(); // created_at & updated_at
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
