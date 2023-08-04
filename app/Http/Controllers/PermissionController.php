<?php


namespace App\Http\Controllers;

use App\Models\CalendarCategory;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        return view('permission.permission_list');
    }
}