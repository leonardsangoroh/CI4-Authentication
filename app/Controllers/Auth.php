<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Libraries\Hash;

class Auth extends BaseController
{

    public function __construct() {
        helper(['url','form']);
    }
    public function index()
    {
        return view('auth/login');
    }

    public function dashboard() {
        return view('dashboard/index');
    }

    public function register () {
        return view('auth/register');
    }

    public function save() {
        
        //validating requests

      /*  $validation = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[5]|max_length[12]',
            'cpassword' => 'required|min_length[5]|max_length[12]|matches[password]'

        ]); */

        $validation = $this->validate([
            
            'name'=> [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your full name is required'
                ]
                ],
            
            'email'=> [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required',
                    'valid_email' => 'You must enter a valid email',
                    'is_unique' => 'Email is already taken'
                ]
                ],

            'password'=> [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'password is required',
                    'min_length' => 'password must have at least 5 characters',
                    'max_length' => 'password must not have more than 12 characters'
                ]
                ],

            'cpassword'=> [
                'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
                'errors' => [
                    'required' => 'Confrim password is required',
                    'min_length' => 'Confirm password must have at least 5 characters',
                    'max_length' => 'Confirm password must not have more than 12 characters',
                    'matches' => 'Confirm password does not match the password'
                ]
            ]

        ]);

        if (!$validation) {
            return view('auth/register',['validation'=>$this->validator]);
        }

        else {
            //Registering users into the db

            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $values = [
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password) ,
            ];

            $usersModel = new \App\Models\UsersModel();
            $query = $usersModel->insert($values);

            if (!$query) {
                return redirect()->back()-with('fail', 'Something went wrong');
            }
            else {
              //  return redirect()->to('auth/register')->with('success', 'You are now registered successfully');

              $last_id = $usersModel->insertID(); //This is the last inserted id
              session()->set('loggedUser',$last_id);
              return redirect()->to('/dashboard');
            }
        }
    }

    function check() {
        //Validation

        $validation = $this->validate([
            'email'=>[
                'rules'=>'required|valid_email|is_not_unique[users.email]',
                'errors'=> [
                    'required'=>'Email is required',
                    'valid_email'=>'Enter a valid email address',
                    'is_not_unique' => 'This email is not registered on our service'
                ]
            ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required'=>'Password is required',
                    'min_length'=>'Password must have at least 5 chareters',
                    'max_length'=>'Password must have at least 12 characters'
                ]
            ] 
        ]);

        if(!$validation) {
            return view('auth/login',['validation'=>$this->validator]);
        }
        else {
            //echo 'Form successfully validated';

            //checking the user

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $usersModel = new \App\Models\UsersModel();
            $user_info = $usersModel->where('email',$email)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if (!$check_password) {
                session()->setFlashdata('fail', 'Incorrect password');

                return redirect()->to('/auth')->withInput();
            }
            else{
                $user_id = $user_info['id'];
                session()->set('loggedUser',$user_id);

                return redirect()->to('/dashboard');
            }
        }
    }

    function logout() {
        if(session()->has('loggedUser')) {
            session()->remove('loggedUser');

            return redirect()->to('/auth?access=out')->with('fail','You are logged out!');
        }
    }

}