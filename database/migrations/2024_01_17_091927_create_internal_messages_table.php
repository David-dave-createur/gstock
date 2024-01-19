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
        Schema::create('internal_messages', function (Blueprint $table) {
             $table->id();
            $table->foreignId('sender_id')->constrained('employees');
            $table->foreignId('receiver_id')->constrained('employees');
            $table->text('contenu_du_message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internal_messages');
    }
};