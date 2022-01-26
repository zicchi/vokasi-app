<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Presence;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    public function index()
    {
        $presences = Presence::with('user')->whereHas('user',function ($q){
            $q->when(\request()->filled('name'),function ($q){
                $q->where('name','like',"%".\request()->input('name')."%");
            });
        })->paginate(10);
        return view('pages.admin.presence.index',[
            'presences' => $presences,
        ]);
    }
}
