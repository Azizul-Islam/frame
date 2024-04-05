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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('heading_en');
            $table->string('heading_bn')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('description_en');
            $table->text('description_bn')->nullable();
            $table->text('instruction_bn')->nullable();
            $table->text('instruction_en')->nullable();
            $table->string('frame_one');
            $table->string('frame_two')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
