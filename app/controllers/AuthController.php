<?php

use TinyURL\Authorization as user;

class AuthController extends BaseController {

    private $user;

    function __construct(user\AutorizationUser $user) {
        $this->user = $user;
    }

    public function getLogin() {
        if ($email = Input::old('email')) {
            return View::make('auth.login', ['email' => $email]);
        }
        return View::make('auth.login');
    }

    public function postLogin() {
        Input::flashExcept('password');

        $data = array(
            'email' => Input::get('email'),
            'password' => Input::get('password'),
        );
        $rules = ['email' => 'required|email',
            'password' => 'required|min:3|max:60'
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails())
            return Redirect::action('AuthController@getLogin')
                            ->withErrors($validator)
                            ->withInput();

        if (!Auth::attempt($data)) {
                if (!Auth::id())
                    return View::make('auth.login', ['auth_errors' => 'Auth error']);
        }

        return Redirect::intended();

    }

    public function getLogout() {
        Auth::logout();
        return Redirect::action('AuthController@getLogin');
    }

    public function getRegistr() {

        if (Auth::check())
            return Redirect::intended();

        if (Input::old('email') | Input::old('name'))
        {
            $email = $name = false;
            $email = Input::old('email');
            $name = Input::old('name');
            return View::make('auth.registration', ['email' => $email, 'name' => $name]);
        }
        return View::make('auth.registration');
    }

    public function postRegistr() {
        Input::flashExcept('password');
        $data = array(
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'password_confirmation' => Input::get('password_confirmation')
        );

        $rules = array(
            'name' => 'required|alpha_num',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        );

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return Redirect::action('AuthController@getRegistr')
                            ->withErrors($validator)
                            ->withInput();
        } else {
            $this->user->saveRegister($data);
            return View::make('index.index', ['confirm' => 'Registration is successful!']);
        }
        return View::make('auth.login', ['confirm' => 'An error occurred while registering!']);
    }

}
