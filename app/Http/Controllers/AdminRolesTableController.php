<?php

namespace App\Http\Controllers;

use App\Models\Roles;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRolesTableController extends Controller
{

    public function index()
    {
        $Roles = Roles::paginate(6);
        return view('admin.roles-table', compact('Roles'));
    }
}
