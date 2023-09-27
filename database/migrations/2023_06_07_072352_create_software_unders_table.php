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
        Schema::create('software_unders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('software_id');
            $table->string('name');
            $table->text('description');
            $table->foreign('software_id')->references('id')->on('software')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_unders');
    }
};
