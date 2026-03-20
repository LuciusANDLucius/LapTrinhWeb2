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
    Schema::create('product', function (Blueprint $table) {
        $table->id();
        $table->string('name', 255);
        $table->string('slug', 255);
        $table->unsignedBigInteger('category_id');
        $table->unsignedBigInteger('brand_id');
        $table->text('description')->nullable();
        $table->double('price');
        $table->double('price_sale')->nullable();
        $table->string('image', 255)->nullable();
        $table->unsignedInteger('qty')->default(0);
        $table->unsignedInteger('created_by')->default(1);
        $table->unsignedInteger('updated_by')->nullable();
        $table->unsignedTinyInteger('status')->default(2);
        $table->softDeletes();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
