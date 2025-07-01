<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
        $users = User::latest()->paginate(6);

        return view('attendances.index')->with([
            "users"=>$users
        ]);

    }

    // //  public function index()
    // {
    // //     return view('attendance.liste',[
    // //           $users= User::all()
    // //         ])
    // // ->extends("layouts.master")
    // // ->section("content");
    // }

}
