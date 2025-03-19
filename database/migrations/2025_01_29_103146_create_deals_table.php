<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_deals_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resort_id')->constrained()->onDelete('cascade'); // Assumes a resorts table exists
            $table->string('title'); // Title of the deal
            $table->text('description')->nullable(); // Description of the deal
            $table->decimal('discount_percentage', 5, 2)->nullable(); // Discount percentage
            $table->decimal('price_after_discount', 10, 2)->nullable(); // Price after discount
            $table->date('start_date'); // Start date of the deal
            $table->date('end_date'); // End date of the deal
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deals');
    }
}