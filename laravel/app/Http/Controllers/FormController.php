<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the incoming form data
        $validated = $request->validate([
            // Individual fields
            'name'        => 'required|string|max:255',
            'dob'         => 'required|date',
            'mobile'      => 'required|string|max:20',
            'email'       => 'required|email|max:255',
            'country'     => 'required|string|max:100',
            'state'       => 'required|string|max:100',
            'city'        => 'required|string|max:100',
            'zip'         => 'required|string|max:20',
            'description' => 'required|string',

            // Organization fields (optional)
            'applyFor'      => 'nullable|string|max:255',
            'company_name'  => 'nullable|string|max:255',
            'designation'   => 'nullable|string|max:255',
            'company_type'  => 'nullable|string|max:255',
            'org_mobile'    => 'nullable|string|max:20',
            'org_email'     => 'nullable|email|max:255',
        ]);

        $data = $validated;

        // Send email using the Blade template
        Mail::send('emails.form', ['data' => $data], function ($message) use ($data) {
            $message->to('k.saravanan0030@gmail.com', 'Admin')
                    ->subject('New Luca World Record Submission');
        });

        // Redirect back with success message
        return back()->with('success', 'Form submitted successfully!');

    }
}



