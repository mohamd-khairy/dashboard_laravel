<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name', 'url', 'icon', 'order', 'parent'];

    public $timestamps = false;

    public function subPage()
    {
        return $this->hasMany(Page::class, 'parent')->orderBy('order','asc');
    }


    public function parentPage()
    {
        return $this->belongsTo(Page::class, 'parent');
    }
}
