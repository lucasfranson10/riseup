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
        echo view('users/index', ['user' => $response, 'serv' => $this->default]);
    }

    /**
     * Show one of the users collection
     */
    public function show($id){
        $client = \Config\Services::curlrequest();
        $response = json_decode($client->request('GET', $this->setURL()."/$id")->getBody());
        echo view('users/profile', ['user' => $response, 'serv' => $this->default]);
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

        if (empty($this->request->getFile('user_avatar')))
        {
             $this->form_validation->set_rules('user_avatar', 'file', 'required');
        
        }
        
        if ($this->request->getMethod() === 'post' && $this->validate($this->requiredField()))
        {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                                    CURLOPT_URL => $this->setURL(),
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_ENCODING => "",
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_TIMEOUT => 0,
                                    CURLOPT_FOLLOWLOCATION => true,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_CUSTOMREQUEST => "POST",
                                    CURLOPT_POSTFIELDS => array('user_name' => $this->request->getPost('user_name'),
                                                                'user_email'  => $this->request->getPost('user_email'),
                                                                'user_prof' => $this->request->getPost('user_prof'),
                                                                'user_exp' => $this->request->getPost('user_exp'),
                                                                'user_phone' => $this->request->getPost('user_phone'),
                                                                'user_loc' => $this->request->getPost('user_loc'),
                                                                'user_avatar'=> new \CURLFILE($this->request->getFile('user_avatar', 'image/png'))),
                                ));

            $response = curl_exec($curl);

            curl_close($curl);

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
