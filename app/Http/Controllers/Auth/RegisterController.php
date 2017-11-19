<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Redirect;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function index()
    {
        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        /*$dataaddress = [
            'address_ua'   => $data['address_ua'],
            'number_ua'    => $data['number_ua'],
            'tower_ua'     => $data['tower_ua'],
            'apartment_ua' => $data['apartment_ua'],
            'city_id'      => $data['city_id']
        ];

        $address = User_address::create($dataaddress);

        $datauser = [
            'rut'           => $data['rut'],
            'name'          => $data['name'],
            'last_name'     => $data['last_name'],
            'birth_date'    => $data['birth_date'],
            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'gender_id'     => $data['gender_id'],
            'type_user_id'  => 1,
            'status'        => 0,
            'addressua_id'    => $address->id
        ];

        $user = User::create($datauser);

        $user = true;
        $message = $user ? 'Sus datos fueron ingresados correctamente, gracias por registrarte en Puente Renta de Bicicletas!' : 'El usuario NO se pudo agregar!';
        
        return \Redirect::to('/')
            ->with('message', $message);*/


    }
}

