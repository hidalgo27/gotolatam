<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageCampaignsTable extends Migration
{
    public function up()
    {
        Schema::create('package_campaigns', function (Blueprint $table) {
            $table->id();
            $table->integer('package_id');
            $table->string('slug', 120);
            $table->string('name');
            $table->boolean('is_active')->default(false);
            $table->dateTime('starts_at')->nullable();
            $table->dateTime('ends_at')->nullable();
            $table->string('headline')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('hero_image')->nullable();
            $table->string('offer_label', 160)->nullable();
            $table->decimal('original_price', 12, 2)->nullable();
            $table->decimal('offer_price', 12, 2)->nullable();
            $table->string('price_category', 20)->nullable();
            $table->string('cta_label', 80)->nullable();
            $table->json('config')->nullable();
            $table->timestamps();

            $table->unique(['package_id', 'slug']);
            $table->foreign('package_id')->references('id')->on('tpaquetes')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('package_campaigns');
    }
}
