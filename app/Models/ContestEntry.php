<?php

namespace App\Models;

use App\Events\NewEntryRegisterEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContestEntry extends Model
{
    use HasFactory;

    protected $guarded = [];

//        protected $dispatchesEvents = [
//        'created' =>  NewEntryRegisterEvent::class
//    ];

    protected static function booted()
    {
//        static::created(function ($contestEntry) {
//        event(NewEntryRegisterEvent::class);
//        });
    }

}
