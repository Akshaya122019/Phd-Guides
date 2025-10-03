<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormMail;


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $formData = $request->all();   // collect form inputs

    try {
        Mail::to('akshayafeather@gmail.com')->send(new FormMail($formData));

        return redirect()
            ->back()
            ->with('success', 'Form submitted successfully ✅');
    } catch (\Exception $e) {
        \Log::error('Mail sending failed: '.$e->getMessage());

        return redirect()
            ->back()
            ->with('error', 'Something went wrong. Please try again ❌');
    }
}
public function save(Request $request)
{
    $formData = $request->all();   // collect form inputs

    try {
        Mail::to('akshayafeather@gmail.com')->send(new FormMail($formData));

        return redirect()
            ->back()
            ->with('success', 'Form submitted successfully ✅');
    } catch (\Exception $e) {
        \Log::error('Mail sending failed: '.$e->getMessage());

        return redirect()
            ->back()
            ->with('error', 'Something went wrong. Please try again ❌');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
