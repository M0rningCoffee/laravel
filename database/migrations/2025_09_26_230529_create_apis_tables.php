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
        Schema::create('apis_tables', function (Blueprint $table) {
            $table->string("nome")->notnull();
            $table->string("url_prefix")->notnull();
            $table->string("version")->nullable();
            $table->string("url_documentation")->nullable();
            $table->text("description")->nullable();
            $table->id();
            $table->timestamps("updated_at")->nullable();
            $table->timestamps("created_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apis_tables');
    }
};
