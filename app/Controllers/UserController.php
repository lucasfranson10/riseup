<?php namespace App\Controllers;


class UserController extends BaseController
{
    public $default = [
		'hostname' => 'http://localhost',
        'port' => '8081',
        'url' => '/user'
	];

    
    private function setURL(){

        return $this->default['hostname'].':'.$this->default['port'].$this->default['url'];
    }

    private function requiredField(){
        echo "req";
        return [
            'user_name' => 'required',
            'user_email'  => 'required',
            'user_prof'  => 'required',
            'user_exp'  => 'required',
            'user_phone'  => 'required',
            'user_loc'  => 'required',
        ];
    }

    /**
     * Show all the users
     */
    public function index(){
        $client = \Config\Services::curlrequest();
        $response = json_decode($client->request('GET', $this->setURL())->getBody());
        echo view('users/index', ['user' => $response]);
    }

    /**
     * Show one of the users collection
     */
    public function show($id){
        $client = \Config\Services::curlrequest();
        $response = json_decode($client->request('GET', $this->setURL()."/$id")->getBody());
        echo view('users/profile', ['user' => $response]);
    }

    /**
     * Show the page for the creation 
     */
    public function create(){  
        echo view('users/create');
    }

/**
 * asdj
 */
    /**
     * Save in the database the data of creation
     */
    public function store(){
        if ($this->request->getMethod() === 'post' && $this->validate($this->requiredField()))
        {
            $client = \Config\Services::curlrequest();
            $client->request('POST', $this->setURL(),[
                'form_params' => [
                    'user_name' => $this->request->getPost('user_name'),
                    'user_email'  => $this->request->getPost('user_email'),
                    'user_prof' => $this->request->getPost('user_prof'),
                    'user_exp' => $this->request->getPost('user_exp'),
                    'user_phone' => $this->request->getPost('user_phone'),
                    'user_loc' => $this->request->getPost('user_loc'),
                ]
            ]);
    
            return $this->response->redirect(site_url('/users'));
    
        }
    }

    /**
     * Show the page for edit user
     */
    public function edit($id){
        $client = \Config\Services::curlrequest();
        $response = json_decode($client->request('GET', $this->setURL(). "/$id")->getBody()); 
        echo view('users/edit', ['user' => $response]);
    }

    /**
     * Update the data in the database
     */
    public function update($id){
        if ($this->request->getMethod() === 'put' &&  $this->validate($this->requiredField()))
        {
            $client = \Config\Services::curlrequest();
            $response = $client->request('PUT', $this->setURL() ."/$id",[
                'headers' => 'Content-Type: application/x-www-form-urlencoded',
                'form_params' => [
                    'user_name' => $this->request->getPost('user_name'),
                    'user_email'  => $this->request->getPost('user_email'),
                    'user_prof' => $this->request->getPost('user_prof'),
                    'user_exp' => $this->request->getPost('user_exp'),
                    'user_phone' => $this->request->getPost('user_phone'),
                    'user_loc' => $this->request->getPost('user_loc'),
                ]
            ]);
            return $this->response->redirect(site_url('/users'));
    
        }
    }

    public function delete($id){
        $client = \Config\Services::curlrequest();
        $response = json_decode($client->request('DELETE', $this->setURL() . "/$id/delete")->getBody());
        return $this->response->redirect(site_url('/users'));
    }

}
