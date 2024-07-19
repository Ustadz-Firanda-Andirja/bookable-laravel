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
        Schema::create('table_of_contents', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('book_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('label');
            $table->foreignUuid('table_of_content_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->longText('content')
                ->nullable();
            $table->unsignedSmallInteger('sequence')
                ->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_of_contents');
    }
};
