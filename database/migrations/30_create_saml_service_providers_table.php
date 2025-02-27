<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('samlidp_service_providers', function (Blueprint $table) {
            $table->string('id')->unique()->comment('acs_url base64 encoded');
            $table->text('acs_url');
            $table->text('destination');
            $table->text('logout');
            $table->longText('certificate');
            $table->boolean('query_params');
            $table->boolean('encrypt_assertion');
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samlidp_service_providers');
    }
};
