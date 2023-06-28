<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::table('articles', function (Blueprint $table) {
            $table->string("title", 150)->change();
            $table->renameColumn("slug", "slug_fr");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string("title", 50)->change();
            $table->renameColumn("slug_fr", "slug");
        });
    }
};
