<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \IonAuth\Libraries\IonAuth;

class Auth extends BaseController
{
    var $ionAuth;
    protected $session;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->ionAuth = new IonAuth();
        $this->session = \Config\Services::session();
        helper('form');
    }

    public function login()
    {
        $data['isPDF'] = false;
        $data['title'] = "Cykloweb - Přihlášení";
        $data['message'] = $this->session->message;
        $data['isLogged'] = $this->ionAuth->loggedIn();
        $data['isAdmin'] = $this->ionAuth->isAdmin();
        $data['username'] = $this->username;
        return view('login', $data);
    }

    public function register()
    {
        $data['isPDF'] = false;
        $data['title'] = "Cykloweb - Registrace";
        $data['message'] = $this->session->message;
        $data['isLogged'] = $this->ionAuth->loggedIn();
        $data['isAdmin'] = $this->ionAuth->isAdmin();
        $data['username'] = $this->username;
        return view('register', $data);
    }

    public function loginComplete()
    {
        $login = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $this->ionAuth->login($login, $password);

        if ($this->ionAuth->loggedIn()) {
            if ($this->ionAuth->isAdmin()) {
                //return redirect()->to('admin/dashboard');
                return redirect()->to('/');
            } else {
                return redirect()->to('/');
            }
        } else {
            $this->session->setFlashdata('message', 'Zadali jste nesprávné údaje.');
            return redirect()->to('login');
        }
    }

    public function logoutComplete()
    {
        $this->ionAuth->logout();
        return redirect()->to('/');
    }

    public function registerComplete()
    {
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('user');
        $password = $this->request->getPost('password');
        $passwordConfirm = $this->request->getPost('passwordConfirm');

        $first_name = $this->request->getPost('name');
        $last_name = $this->request->getPost('surname');
        $additional_data = [
            'name' => $first_name,
            'surname' => $last_name,
        ];

        if ($password === $passwordConfirm) {
            $this->ionAuth->register($username, $password, $email, $additional_data);
            $this->ionAuth->login($email, $password);
            return redirect()->to('/');
        } else {
            $this->session->setFlashdata('message', 'Hesla se neshodují.');
            return redirect()->to('register');
        }
    }
}
