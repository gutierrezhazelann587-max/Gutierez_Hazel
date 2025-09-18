<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: ProfilelController
 * 
 * Automatically generated via CLI.
 */
class ProfilelController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = $this->ProfileModel->all();
        $this->call->view('pView', $data);
    }

    public function create()
    {
        if ($this->io->method() === 'post') {
            $username= $this->io->post('username');
            $age = $this->io->post('age');
            $address = $this->io->post('address');

            $data = array(
                'username' => $username,
                'age' => $age,
                'address' => $address
            );

            $this->ProfileModel->insert($data);
         redirect('/');
        } else {
            $this->call->view('pCreate');
        }
    }
        public function edits($id)
    {
        if ($this->io->method() === 'post') {
            $username = $this->io->post('username');
            $age = $this->io->post('age');
            $address = $this->io->post('address');

            $data = array(
                'username' => $username,
                'age' => $age,
                'address' => $address
            );

            $this->ProfileModel->update($id, $data);
            redirect('/');
        } else {
            $data = $this->ProfileModel->find($id);
            $this->call->view('pUpdate', $data);
        }
    }

    public function delete($id)
    {
        $this->ProfileModel->delete($id);
        redirect('/');
    }
}