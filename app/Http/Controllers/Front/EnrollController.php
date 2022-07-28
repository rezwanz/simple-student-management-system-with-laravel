<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Enroll;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EnrollController extends Controller
{
    private $enrolls;

    public function enrollCourse (Request $request)
    {
        if (Auth::check())
        {
            if (Auth::user()->access_label == 0)
            {
                $enroll = Enroll::createEnroll($request);
                $data = [
                    'name'  => 'tomuk',
                    'enroll'    => $enroll,
                    'user'      => User::find(auth()->id()),
                ];
                Mail::send('front.invoice', $data, function ($message) use ($data) {
                    $message->to(auth()->user()->email, 'BITM')->subject('SMS Enroll');
                });
                return redirect()->back()->with('message', 'You enrolled this course successfully.');
            } else {
                return redirect()->back()->with('error', 'Only student can apply for this course.');
            }

        } else {
            return redirect('/login')->with('error', 'You must login first to enroll a course.');
        }
    }

    public function manage()
    {
        $this->enrolls = Enroll::latest()->get();
        return view('admin.enroll.manage', [
            'enrolls'   => $this->enrolls
        ]);
    }

    public function changeStatus ($id)
    {
        $enroll = Enroll::find($id);
        if ($enroll->payment_status == 'pending')
        {
            $enroll->payment_status = 'complete';
        }elseif ($enroll->payment_status == 'complete')
        {
            $enroll->payment_status = 'pending';
        }
        $enroll->save();
        return back()->with('message', 'Payment status changed successfully.');
    }
}
