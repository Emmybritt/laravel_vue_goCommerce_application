<?php

//before registering your business you will have to have registered for the normal registeration
//business registeration is 2000
//affiliates receives 3% amounting to 600
//paypal receives 1% 200

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_businesses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id');
            $table->string('name'); //business name
            $table->string('address');//business address
            $table->string('image')->nullable(); //this is optional it should be image of the location of business
            $table->string('business_line1'); //business number must be required
            $table->string('business_line2')->nullable();//business number must be optional
            $table->string('type');
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
        Schema::dropIfExists('registered_businesses');
    }
};
