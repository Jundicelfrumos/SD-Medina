<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
{
    Schema::table('news', function (Blueprint $table) {
        $table->string('title')->after('id');
        $table->string('category')->after('title');
        $table->text('content')->after('category');
        $table->string('image')->nullable()->after('content');
    });
}

public function down(): void
{
    Schema::table('news', function (Blueprint $table) {
        $table->dropColumn(['title', 'category', 'content', 'image']);
    });
}
}
