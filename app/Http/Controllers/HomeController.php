<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Illuminate\Support\Facades\DB;
use DateTime;
use Carbon\Carbon;
use Auth;
use App\Employee;
use App\Models\hvl\CustomersAdmin;
use App\Models\hvl\LeadMaster;
use App\Helpers\Helper;
use App\ActivityMaster;
use App\RelainceServiceForm;
use App\Models\hvl\ActivityServiceReport;
use App\RoleWiseUser;
use App\PreGoogleMedia;
use Image;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $req) {
        if ($req->ip() == '182.65.247.207') {
            
            // echo 44; die;
            /*
            $service_activity = array_unique(DB::table('activity_service_reports')->pluck('activity_id')->toArray());
            $array_data = array_chunk($service_activity, 500);
            foreach ($array_data as $key => $eachDataArray) {
                DB::table('hvl_activity_master')
                        ->whereIn('id', $eachDataArray)
                        ->update(['is_gen_form_submited' => 1]);
                echo " done <pre>";
            }
            die;
            */
        }
        return view('common_dashboard');
    }

    public function privacypolicy() {
        return view('privacypolicy');
    }
}
