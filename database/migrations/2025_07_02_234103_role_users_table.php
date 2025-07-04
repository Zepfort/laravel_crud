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
        Schema::create('roles', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->enum('status', ['submitted', 'approved', 'rejected'])->default('submitted')->after('password');
            $table->unsignedBigInteger('role_id')->after("status");

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('role_id');
        });
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('status', 'role_id');
        });
        Schema::dropIfExists('roles');
    }
};
