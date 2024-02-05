<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'contact_person',
        'contact_email', 
        'contact_phone', 
        'address', 
        'services_offered', 
        'service_categories', 
        'website', 
        'social_media_links', 
        'logo_url', 
        'status', 
   ];
}
