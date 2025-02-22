<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Newsletter;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subs = Subscriber::all();
        return view('admin.subscriber.index', compact('subs'));
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
        $request->validate([
            'subject' => ['required', 'max:255'],
            'message' => ['required']
        ]);

        $subscribers = Subscriber::pluck('email')->toArray();

        /** Send mails */
        Mail::to($subscribers)->send(new Newsletter($request->subject, $request->message));

        toast(__('admin.Mail sended successfully!'), 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subscriber::findOrFail($id)->delete();

        return response(['status' => 'success', 'message' => __('admin.Deleted Successfully!')]);
    }
}
