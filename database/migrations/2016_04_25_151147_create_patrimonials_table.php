<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatrimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimonials', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('patrimonial_type_id')->unsigned()->default(1);
            $table->foreign('patrimonial_type_id')->references('id')->on('patrimonial_types');

            $table->integer('patrimonial_sub_type_id')->unsigned()->default(1);
            $table->foreign('patrimonial_sub_type_id')->references('id')->on('patrimonial_sub_types');

            $table->integer('patrimonial_brand_id')->unsigned()->default(1);
            $table->foreign('patrimonial_brand_id')->references('id')->on('patrimonial_brands');

            $table->integer('patrimonial_model_id')->unsigned()->default(1);
            $table->foreign('patrimonial_model_id')->references('id')->on('patrimonial_models');

            $table->integer('patrimonial_status_id')->unsigned()->default(1);
            $table->foreign('patrimonial_status_id')->references('id')->on('patrimonial_statuses');
            $table->date('patrimonial_status_date')->nullable();

            $table->integer('affiliated_society_id')->unsigned()->default(1);
            $table->foreign('affiliated_society_id')->references('id')->on('affiliated_societies');

            $table->integer('patrimonial_sector_id')->unsigned()->default(1);
            $table->foreign('patrimonial_sector_id')->references('id')->on('patrimonial_sectors');

            $table->integer('patrimonial_sub_sector_id')->unsigned()->default(1);
            $table->foreign('patrimonial_sub_sector_id')->references('id')->on('patrimonial_sub_sectors');

            $table->integer('code');
            $table->string('description', 200)->nullable();
            $table->string('serial', 25)->nullable();
            $table->date('purchase_date')->nullable();
            $table->string('purchase_process', 25)->nullable();
            $table->float('purchase_value', 10)->default(0);

            $table->integer('provider_id')->unsigned()->default(1);
            $table->foreign('provider_id')->references('id')->on('providers');
            
            $table->string('invoice', 15)->nullable();
            $table->float('useful_life_years', 2)->nullable();
            $table->string('comments', 200)->nullable();
  
            $table->timestamps();
            $table->softDeletes();

            $table->index(['code']);
            $table->index(['description']);
            $table->index(['serial']);

            $table->index(['patrimonial_type_id', 'patrimonial_sub_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patrimonials');
    }
}
