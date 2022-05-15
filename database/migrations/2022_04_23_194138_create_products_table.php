<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\StoreCollection;
use App\Models\ProductCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(StoreCollection::class, 'collection_id');
            $table->foreignIdFor(ProductCategory::class, 'product_category_id');
            $table->string('name');
            $table->string('slug');
            $table->string('tags');
            $table->string('image');
            $table->longText('description');
            $table->longText('data')->nullable();
            $table->string('quantity');
            $table->string('price');
            $table->string('discount_price');
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
        Schema::dropIfExists('products');
    }
};
