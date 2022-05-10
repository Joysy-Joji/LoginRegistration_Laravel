<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display Homepage.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('joysy.welcome');
    }

    /**
     * Show Login Page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showLogin()
    {
        return view('login');

    }

    /**
     * Login the user and redirect to Dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function login(Request $request)
    {
        $email = strtolower($request->input('email'));

        $password = $request->input('password');

        $userExists = User::where('email', $email)->where('password',$password)->exists();

        if ($userExists) {

            $dashboardUrl = route('web.dashboard');

            return redirect($dashboardUrl)->with('status',"Login  successful");
        }
    }

    /**
     * Show Register page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showRegister()
    {
        return view('register');
    }

    /**
     * Show dashboard
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Register the user and redirect to Login page.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(Request $request)
    {
        $email = strtolower($request->input('email'));

        $userExists = User::where('email', $email)->exists();

        if ($userExists) {
            return back()->with('error', 'Sorry, An account already exists with same email. Please login.');
        }

        $user = User::create([
            'name'      => ucwords($request->input('name')),
            'email'     => $email,
            'password'  => bcrypt($request->input('password')),
        ]);

        $loginUrl = route('web.login.show');

        return redirect($loginUrl)->with('status', "Registration successful. Please login.");
    }


}










