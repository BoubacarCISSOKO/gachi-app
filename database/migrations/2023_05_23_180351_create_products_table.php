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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nom");
            $table->bigInteger('user_id');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade')->default('null');
            $table->unsignedBigInteger('souscategorie_id');
            $table->foreign('souscategorie_id')->references('id')->on('souscategories')->onDelete('cascade')->default('null');
            $table->unsignedBigInteger('marque_id');
            $table->foreign('marque_id')->references('id')->on('marques')->onDelete('cascade');
            $table->string("image")->nullable();
            $table->string("photos",2000)->nullable();
            $table->double("prix_unitaire");
            $table->double("prix_achat");
            $table->longText("description");
            $table->integer('published')->default(1);
            $table->integer('featured')->default(0);
            $table->integer('stocks')->default(0);
            $table->string('unite')->nullable();
            $table->double('remise')->nullable();
            $table->string('type_remise')->nullable();
            $table->double('taxe')->nullable();
            $table->string('type_taxe')->nullable();
            $table->string('type_livraison')->nullable();
            $table->double('cout_livraison')->nullable();
            $table->mediumText('colors')->nullable();
            $table->mediumText('variations');
            $table->mediumText('options')->nullable();
            $table->mediumText('slug');
            $table->double('rating')->default('0.00');
            $table->integer("nbre_vue")->default(0);
            $table->longText("tags")->nullable();
            $table->softDeletes();
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
