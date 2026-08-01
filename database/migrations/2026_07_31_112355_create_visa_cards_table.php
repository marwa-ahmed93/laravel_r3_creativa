<?php

use App\Models\User;
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
        Schema::create('visa_cards', function (Blueprint $table) {
            $table->id();
            $table->integer('visa_number')->unique();
            // $table->integer('user_id');
            // $table->foreign('user_id')->references('id'); 
            $table->foreignId('user_id')->constrained()->uniqid();   //users id
            // $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_cards');
    }
};
