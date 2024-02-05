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
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('contact_person');
            $table->string('contact_email')->nullable();
            $table->string('contact_phone');
            $table->string('address');
            $table->text('services_offered');
            $table->foreignId('service_categories')->constrained('categories')->cascadeOnDelete();
            $table->string('website')->nullable();
            $table->string('social_media_links')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_providers');
    }
};
