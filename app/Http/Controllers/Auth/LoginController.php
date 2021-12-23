<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller {
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (!auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('tickets');
    }
}
