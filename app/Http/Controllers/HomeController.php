<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        return view('home');
    }
    
    /**
     * Check visa eligibility (for API)
     */
    public function checkEligibility(Request $request)
    {
        // Validate request
        $request->validate([
            'country' => 'required|string',
            'purpose' => 'required|string',
            'nationality' => 'required|string',
        ]);
        
        // Process eligibility (this would normally query a database)
        $data = [
            'eligible_visas' => ['Student Visa', 'Work Visa'],
            'processing_time' => '3-4 weeks',
            'cost_range' => '$500 - $1500',
            'success_probability' => '85%'
        ];
        
        return response()->json($data);
    }
    
    /**
     * Book consultation (for API)
     */
    public function bookConsultation(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'visa_type' => 'required|string',
            'date' => 'required|date',
            'notes' => 'nullable|string',
        ]);
        
        // Process booking (this would normally save to database and send notifications)
        
        return response()->json([
            'success' => true,
            'message' => 'Consultation booked successfully! We will contact you soon.',
            'booking_id' => 'CON-' . time(),
        ]);
    }
}