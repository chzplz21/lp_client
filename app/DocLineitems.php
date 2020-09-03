<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocLineitems extends Model
{
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at', 'id'];
    protected $table = 'doc_lineitems';
    
}
