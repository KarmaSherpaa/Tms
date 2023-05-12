<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function index()
    {
        return view('Tax.tax');
    }

    public function create(Request $request)
    {
        if (!auth()->check() || !auth()->user()->profile) {
            return redirect()->route('login');
        }

        $status = auth()->user()->profile->status;

        $gross_income = $this->calculate_tax($request->mothly_salary, $status, $request->life_insurance, $request->medical_expences, $request->epf_contribution, $request->ssf_contribution, $request->cit_contribution, $request->house_insurance, $request->donation, $request->other_allowed_deduction, $request->medical_expences);

        $tax = Tax::where('user_id', auth()->user()->id)->first();

        if ($tax) {
            $tax->update([
                'mothly_salary' => $request->mothly_salary,
                'epf_contribution' => $request->epf_contribution,
                'ssf_contribution' => $request->ssf_contribution,
                'cit_contribution' => $request->cit_contribution,
                'life_insurance' => $request->life_insurance,
                'health_insurance' => $request->health_insurance,
                'house_insurance' => $request->house_insurance,
                'donation' => $request->donation,
                'other_allowed_deduction' => $request->other_allowed_deduction,
                'medical_expences' => $request->medical_expences,
                'gross_income' => $gross_income
            ]);
        } else {
            $tax = Tax::create([
                'user_id' => auth()->user()->id,
                'mothly_salary' => $request->mothly_salary,
                'epf_contribution' => $request->epf_contribution,
                'ssf_contribution' => $request->ssf_contribution,
                'cit_contribution' => $request->cit_contribution,
                'life_insurance' => $request->life_insurance,
                'health_insurance' => $request->health_insurance,
                'house_insurance' => $request->house_insurance,
                'donation' => $request->donation,
                'other_allowed_deduction' => $request->other_allowed_deduction,
                'medical_expences' => $request->medical_expences,
                'gross_income' => $gross_income
            ]);
        }

        return view('Tax/generate-report', ['report' => $tax]);
    }

    // public function create(Request $request)
    // {
    //     $status = auth()->user()->profile->status;

    //     $gross_income = $this->calculate_tax($request->mothly_salary, $status, $request->life_insurance, $request->medical_expences, $request->epf_contribution, $request->ssf_contribution, $request->cit_contribution, $request->house_insurance, $request->donation, $request->other_allowed_deduction, $request->medical_expences);

    //     $tax = Tax::where('user_id', auth()->user()->id)->first();

    //     if ($tax) {
    //         $tax->update([
    //             'mothly_salary' => $request->mothly_salary,
    //             'epf_contribution' => $request->epf_contribution,
    //             'ssf_contribution' => $request->ssf_contribution,
    //             'cit_contribution' => $request->cit_contribution,
    //             'life_insurance' => $request->life_insurance,
    //             'health_insurance' => $request->health_insurance,
    //             'house_insurance' => $request->house_insurance,
    //             'donation' => $request->donation,
    //             'other_allowed_deduction' => $request->other_allowed_deduction,
    //             'medical_expences' => $request->medical_expences,
    //             'gross_income' => $gross_income
    //         ]);
    //     } else {
    //         $tax = Tax::create([
    //             'user_id' => auth()->user()->id,
    //             'mothly_salary' => $request->mothly_salary,
    //             'epf_contribution' => $request->epf_contribution,
    //             'ssf_contribution' => $request->ssf_contribution,
    //             'cit_contribution' => $request->cit_contribution,
    //             'life_insurance' => $request->life_insurance,
    //             'health_insurance' => $request->health_insurance,
    //             'house_insurance' => $request->house_insurance,
    //             'donation' => $request->donation,
    //             'other_allowed_deduction' => $request->other_allowed_deduction,
    //             'medical_expences' => $request->medical_expences,
    //             'gross_income' => $gross_income
    //         ]);
    //     }

    //     return view('Tax/generate-report', ['report' => $tax]);
    // }


    //return redirect('/tax');

    function calculate_tax($income, $status, $life_insurance_premium = 0, $medical_insurance = 0, $epf_contribution, $ssf_contribution, $cit_contribution, $house_insurance, $donation, $other_allowances, $medical_expenses)
    {

        $tax = 0;
        $taxable_income = $income * 12;

        // Apply deductions and reductions

        $life_insurance_deduction = min($life_insurance_premium, 25000);
        $taxable_income -= $life_insurance_deduction;

        $medical_insurance_deduction = min($medical_insurance, 20000);
        $taxable_income -= $medical_insurance_deduction;

        $epf_deduction = min($epf_contribution, $taxable_income);
        $taxable_income -= $epf_deduction;

        $ssf_deduction = min($ssf_contribution, $taxable_income);
        $taxable_income -= $ssf_deduction;

        $cit_deduction = min($cit_contribution, $taxable_income);
        $taxable_income -= $cit_deduction;

        $house_insurance_deduction = min($house_insurance, $taxable_income);
        $taxable_income -= $house_insurance_deduction;

        $donation_deduction = min($donation, $taxable_income);
        $taxable_income -= $donation_deduction;

        $other_allowances_deduction = min($other_allowances, $taxable_income);
        $taxable_income -= $other_allowances_deduction;

        $medical_expenses_deduction = min($medical_expenses, $taxable_income);
        $taxable_income -= $medical_expenses_deduction;

        // Determine tax rate based on status and income
        if ($status == 1) {
            if ($taxable_income <= 450000) {
                $tax = $taxable_income * 0.01;
            } elseif ($taxable_income <= 550000) {
                $tax = 6000 + (($taxable_income - 450000) * 0.1);
            } elseif ($taxable_income <= 750000) {
                $remaining = $taxable_income - 550000;
                $remaining_tax =  $remaining * 0.2;
                $tax = 26000 + $remaining_tax;
            } elseif ($taxable_income <= 2000000) {
                $remaining = $taxable_income - 750000;
                $remaining_tax =  $remaining * 0.3;
                $tax = 86000 + $remaining_tax;
            } else {
                $remaining = $taxable_income - 2000000;
                $remaining_tax =  $remaining * 0.36;
                $tax = 356000 + $remaining_tax;
            }
        } else {
            if ($taxable_income <= 500000) {
                $tax = $taxable_income * 0.01;
            } elseif ($taxable_income <= 700000) {
                $tax = 5000 + (($taxable_income - 500000) * 0.1);
            } elseif ($taxable_income <= 1000000) {
                $remaining = $taxable_income - 700000;
                $remaining_tax =  $remaining * 0.2;
                $tax = 25000 + $remaining_tax;
            } elseif ($taxable_income <= 2000000) {
                $remaining = $taxable_income - 1000000;
                $remaining_tax =  $remaining * 0.3;
                $tax = 85000 + $remaining_tax;
            } else {
                $remaining = $taxable_income - 2000000;
                $remaining_tax =  $remaining * 0.36;
                $tax = 385000 + $remaining_tax;
            }
        }

        return $tax;
    }
    public function showIncome($id)
    {
        // Get the user's tax records
        $taxRecords = Tax::where('user_id', $id)->get();

        // Get the user's monthly salary from their tax records
        $monthlySalary = $taxRecords->sum('monthly_salary');

        // Pass the tax records and monthly salary to the view
        return view('user-details', [
            'report' => $taxRecords,
            'monthlySalary' => $monthlySalary
        ]);
    }


}
