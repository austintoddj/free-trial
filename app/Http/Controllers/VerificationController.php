<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Grab all of the existing user emails
        $user_emails = User::all()->pluck('email');

        // Verify that we have a valid email to check
        if ($this->isValid($request->email)) {

            // Check the email against pre-existing emails
            if ($user_emails->contains($request->email)) {
                return response()->json([
                    'message' => 'Email already exists',
                ], 422);
            } else {
                return response()->json([
                    'message' => 'Success',
                ], 200);
            }
        } else {
            return response()->json([
                'message' => 'Invalid email address',
            ], 400);
        }
    }

    /**
     * Perform a simple validation for email addresses.
     *
     * @param string $email
     * @return bool
     */
    private function isValid(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
