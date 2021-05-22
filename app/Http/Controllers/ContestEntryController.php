<?php

namespace App\Http\Controllers;

use App\Events\NewEntryRegisterEvent;
use App\Models\ContestEntry;
use Illuminate\Http\Request;

class ContestEntryController extends Controller
{
    //
    public function entry(){
        $data = \request()->validate([
            'email' => 'required|email'
        ]);
            $entry = ContestEntry::create(\request()->all());
        event(new NewEntryRegisterEvent($entry));
    }

}
