<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;

class BookingController extends Controller
{

    public function index()
    {
        $booking = booking::all();
        return view('booking', compact('booking'));
    }

    public function store(Request $request)
    {
       
        booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'room' => $request->rooms,            
            'number' => $request->number1,
            'number_guest' => $request->number2,
            'in_out' => $request->date1
        ]);

        //review::create($request->all());
        
        return redirect('booking');
        //return redirect()->view('admin');
    }

    public function destroy($id)
    {
        booking::findOrFail($id)->delete();
        return redirect('bo');
    }
}
