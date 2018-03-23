<?php
namespace Kilimall\Viewer\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class ViewerController extends Controller
{
    public function index(Request $request)
    {
        $connections = config('database.connections');
        $connection = $request->get('connection', config('database.default'));
        $connection = $connections[$connection];
        $database = $connection['database'];
        $tables = DB::select('show tables');
        $tables = array_column($tables, 'Tables_in_'.$database);
        foreach($tables as $table) {
            $desc = DB::select("SHOW FULL COLUMNS FROM $table");
            $ret[$table] = $desc;
        }
        return view('viewer::viewer', [ 'tables' => $ret ]);
    }
}
