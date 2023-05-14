<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{

    public function index()
    {
        // Get the authenticated user
        $admin = Auth::user();
        if ($admin->hasRole('province-admin')) {
        // Get all users who have a profile and have the "normal-user" role and belong to the same province as the admin
        $data = User::whereHas('profile')
            ->whereHas('roles', function ($q) {
                $q->where('name', 'normal-user');
            })
            ->whereHas('profile', function ($q) use ($admin) {
                $q->where('province_id', $admin->profile->province_id);
            })
            ->whereHas('profile', function ($q) {
                $q->whereNull('pan_number');
            })
            ->with('profile', function ($q) {
                $q->with('province');
            })
            ->get();
        }else{
            $data = User::whereHas('profile')
            ->whereHas('roles', function ($q) {
                $q->where('name', 'normal-user');
            })
            ->whereHas('profile', function ($q) {
                $q->whereNull('pan_number');
            })
            ->with('profile', function ($q) {
                $q->with('province');
            })
            ->get();
        }
        return view('user-pan-list', ['user' => $data]);
    }

    // public function index(){
    //     $data=User::whereHas('profile')
    //     ->whereHas('roles',function($q){
    //         $q->where('name','normal-user');
    //     })
    //     ->whereHas('profile',function($q){
    //         $q->whereNull('pan_number');
    //     })
    //     ->with('profile',function($q){
    //         $q->with('province');
    //     })->get();
    //     return view('user-pan-list ',['user'=>$data]);
    // }
    public function indexTaxPayer()
    {
        // Get the authenticated user
        $admin = Auth::user();
        if ($admin->hasRole('province-admin')) {
            $data = User::whereHas('profile')
                ->whereHas('roles', function ($q) {
                    $q->where('name', 'normal-user');
                })
                ->whereHas('profile', function ($q) use ($admin) {
                    $q->where('province_id', $admin->profile->province_id);
                })
                ->whereHas('profile', function ($q) {
                    $q->whereNotNull('pan_number');
                })
                ->with('profile', function ($q) {
                    $q->with('province');
                })->get();
        } else {
            $data = User::whereHas('profile')
                ->whereHas('roles', function ($q) {
                    $q->where('name', 'normal-user');
                })
                ->whereHas('profile', function ($q) {
                    $q->whereNotNull('pan_number');
                })
                ->with('profile', function ($q) {
                    $q->with('province');
                })->get();
        }
        return view('user-list ', ['user' => $data]);
    }

    public function delete($id)
    {
        $data = User::findOrFail($id);
        $data->profile->delete(); // delete child row(s) first
        $data->delete(); // delete parent row
        return redirect()->back()->with(['message' => 'User Successfully Deleted']);;
    }



    public function show($id)
    {
        $data = User::whereHas('profile')->with('profile', function ($q) {
            $q->with('province');
        })->find($id);

        return view('user-pan-detail', ['user' => $data]);
    }
    public function detials($id)
    {
        $data = User::whereHas('profile')->with('profile', function ($q) {
            $q->with('province');
        })->find($id);

        return view('normal-user-profile', ['user' => $data]);
    }
    public function showverifieduser($id)
    {
        $taxRecords = Tax::where('user_id', $id)->get();

        // Get the user's monthly salary from their tax records
        $monthlySalary = $taxRecords->sum('monthly_salary');
        $epf = $taxRecords->sum('epf_contribution');
        $ssf = $taxRecords->sum('ssf_contribution');
        $cit = $taxRecords->sum('cit_contribution');
        $lifeInsurance = $taxRecords->sum('life_insurance');
        $healthInsurance = $taxRecords->sum('health_insurance');
        $houseInsurance = $taxRecords->sum('house_insurance');
        $donation = $taxRecords->sum('donation');
        $otheralloweallowence = $taxRecords->sum('other_allowed_deduction');
        $medicalAllowence = $taxRecords->sum('medical_expences');
        $grossIncome = $taxRecords->sum('gross_income');

        $data = User::whereHas('profile')->with('profile', function ($q) {
            $q->with('province');
        })->find($id);

        return view('user-details', [
            'user' => $data,
            'report' => $taxRecords,
            'monthlySalary' => $monthlySalary,
            'epf' => $epf,
            'ssf' => $ssf,
            'cit' => $cit,
            'lifeInsurance' => $lifeInsurance,
            'healthInsurance' => $healthInsurance,
            'houseInsurance' => $houseInsurance,
            'donation' => $donation,
            'otheralloweallowence' => $otheralloweallowence,
            'medicalAllowence' => $medicalAllowence,
            'grossIncome' => $grossIncome,
        ]);
    }
}
