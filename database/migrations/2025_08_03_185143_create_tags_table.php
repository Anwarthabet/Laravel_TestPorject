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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
         Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Job::class,'Job_listing_Id').constrained()->cascadeOnDelete('cascade');
         $table->foreignIdFor(\App\Models\Tag::class,'Tag_Id').constrained()->cascadeOnDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
