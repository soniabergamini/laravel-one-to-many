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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100)->unique();
        });

        // Schema::table('projects', function (Blueprint $table) {
        //     $table->foreignId('type_id')->nullable()->constrained();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');

        // Schema::table('projects', function (Blueprint $table) {
        //     $table->dropForeign('projects_type_id_foreign');
        //     $table->dropColumn('type_id');
        // });
    }
};
