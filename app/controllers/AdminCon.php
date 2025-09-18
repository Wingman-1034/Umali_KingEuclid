<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: AdminCon
 * 
 * Automatically generated via CLI.
 */
class AdminCon extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->model('AdminModel');
    }

    public function login()
    {
        if (isset($_SESSION['error'])) {
            echo "<script>alert('Invalid username or password');</script>";
            unset($_SESSION['error']);            
        }
        $this->call->view('admin/login');
    }

    public function verify()
    {
        if ($this->form_validation->run()) {
            $email = trim($_POST['username']);
            $password = trim($_POST['password']);
            

            $admin = $this->AdminModel->verifyAdmin($email, $password);
            if ($admin) {
                // Set user session and redirect to admin
                $_SESSION['admin'] = $admin;
                redirect('/admin-home');
            } else {
            // Redirect back to login with error
                $_SESSION['error'] = 'Invalid Credentials';
                redirect('/');
            }
        }
    }

    public function home()
    {
        if (!isset($_SESSION['admin'])) {
            header('Location: /admin-login');
            exit;
        }
        $this->call->view('admin/home');
    }

    public function dashboard()
    {
        if (!isset($_SESSION['admin'])) {
            header('Location: /admin-login');
            exit;
        }
        $this->call->view('admin/dashboard');
    }

    public function accounts()
    {
        if (!isset($_SESSION['admin'])) {            
            header('Location: /admin-login');
            exit;
        }
        $users = $this->AdminModel->get_all();
        $this->call->view('admin/accounts', ['users' => $users]);
    }

    public function logout()
    {
        session_destroy();
        header('Location: /admin-login');
        exit;
    }
}