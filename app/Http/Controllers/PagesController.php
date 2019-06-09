<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Albums;
use App\Musics;
use App\Events;
use App\Photos;

class PagesController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC');
        $photos = Photos::orderBy('id', 'DESC')->paginate(15);
        $events = Events::orderBy('id', 'DESC')->paginate(10);
        $albums = Albums::orderBy('id', 'DESC')->paginate(1);
        $upevents = Events::orderBy('id', 'DESC')->paginate(1);

        return view('index',compact('albums','upevents','events','photos','users'));
    }
}
