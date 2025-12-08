<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmissionMail;

class FormController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'dob'         => 'required|string|max:255',
            'mobile'      => 'required|string|max:20',
            'email'       => 'required|email',
            'country'     => 'required|string',
            'state'       => 'required|string',
            'city'        => 'required|string',
            'zip'         => 'required|string',
            'description' => 'required|string',
        ]);

        Mail::to('lucaworldrecords@gmail.com')
            ->send(new FormSubmissionMail($validated));

        return response()->json(['success' => true]);
    }
}
