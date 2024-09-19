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
        Schema::create('sharesquare', function (Blueprint $table) {
            $table->id(); // making an autoincrement id kolom
            $table->string('planid')->nullable(); // adding an planid colom wich is nullable didnt really know if this should have been the id kolom but my head says a row of data should always have an id. 
            $table->string('firstname', 40); // a firstname colomn with a value that can be up to 40 characters
            $table->string('lastname', 60); // a colomn of lastname wich can be up to 60 characters
            $table->string('email', 80); // a colomn for inserting email
            $table->string('kpi', 100); // another colomn
            $table->integer('value'); // value needed to be an integer, could have been a decimal number but didnt really see the point of saying somebody worked 5,54 hours or something
            $table->date('date'); // this colomn says the date
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sharesquare');
    }
};
