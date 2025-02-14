<?php

declare(strict_types=1);

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
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 250);
            $table->text('description');
            $table->text('slug');
            $table->tinyInteger('is_select')->nullable();
            $table->integer('sequence')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

            $table->primary(['id', 'updated_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
