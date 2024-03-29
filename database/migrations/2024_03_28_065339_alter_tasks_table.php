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
        Schema::table('tasks', function (Blueprint $table) {
        
            // Rename a column
            $table->renameColumn('status', 'image');
            // Drop a column
         
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void    
    {
        Schema::table('tasks', function (Blueprint $table) {
            // Reverse the modifications made in the "up" method
            $table->dropColumn('status');
            
        });  
    }
};