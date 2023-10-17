<?php
namespace Zems\ZemsBuilder;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use DB;

class ZemsBuilderController extends Controller
{
    public $method;
    public $request;       
    public function index($data = false)
    {
        return "ZemsBuilder demo";
    }        
}
