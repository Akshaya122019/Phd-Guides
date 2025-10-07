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
public function store(Request $request)
{
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|max:255',
        'contact'    => 'required|string|max:20',
        'page'     => 'nullable|string|max:255',
        'document' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
    ]);

    try {
        $filename = null;
        $document = null;
        $pdfAbsolutePath = null;

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = time() . '_' . $file->getClientOriginalName();

            $destinationPath = public_path('storage/uploads/forms');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $file->move($destinationPath, $filename);
            $document = asset('storage/uploads/forms/' . $filename);

            $pdfAbsolutePath = $destinationPath . '/' . $filename;
        }

        $formData = [
            'name'     => $request->name,
            'email'    => $request->email,
            'contact'    => $request->contact,
            'service'    => $request->service,
            'research_area'    => $request->research_area,
            'country'    => $request->country,
            'state'    => $request->state,
            'place'    => $request->place,
            'message'    => $request->message,
            'document' => $document,
            'page'     => $request->page,
        ];

        Mail::to('akshayafeather@gmail.com')->send(new FormMail($formData, $pdfAbsolutePath));

        return redirect()->back()->with('success', 'Form submitted successfully ✅');
    } catch (\Exception $e) {
        \Log::error('Form submission failed: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong. Please try again ❌');
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
