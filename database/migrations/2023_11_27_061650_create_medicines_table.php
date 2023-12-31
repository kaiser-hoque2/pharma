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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companies_id')->index();
            $table->foreign('companies_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('bname');
            $table->string('gname');
            $table->string('product_code', 50);
            $table->unsignedBigInteger('category_id')->index()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id')->index()->nullable();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('dose_id')->index();
            $table->foreign('dose_id')->references('id')->on('doses')->onDelete('cascade');
            $table->decimal('price');
            $table->integer('status');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->date('manufacturedate');
            $table->date('expiredate');
            $table->string('strength');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
