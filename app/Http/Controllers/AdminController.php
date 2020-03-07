<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Exports\AdminExport;
use App\Formatters\AdminFormatter;
use App\Transformers\AdminTransformer;
use App\Services\AdminService;
use Exception;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/**
 * Class AdminController
 *
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /**
     * @var AdminService
     */
    protected $service;

    public function index()
    {
        return view('admins.index');
    }
}
