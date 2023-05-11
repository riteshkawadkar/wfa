<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
  {
    Schema::create('companies', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('short_name');
      $table->string('email')->unique();
      $table->string('domain');
      $table->string('company_url')->nullable();
      $table->string('company_logo')->nullable();
      $table->string('phone_number', 10)->nullable();
      $table->string('address');
      $table->string('city')->nullable();
      $table->string('state')->nullable();
      $table->string('zip_code');
      $table->string('country');
      $table->string('gstin')->nullable();
      $table->string('pan')->nullable();
      $table->boolean('status')->default(true);
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
        Schema::dropIfExists('companies');
    }
};
