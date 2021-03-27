<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->text('image')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_sub_title')->nullable();
            $table->string('about_count')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_sub_title')->nullable();
            $table->string('service_count')->nullable();
            $table->string('product_title')->nullable();
            $table->string('product_sub_title')->nullable();
            $table->string('product_count')->nullable();
            $table->string('category_count')->nullable();
            $table->string('sponser_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
