<?php namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    /**
     * Show all the users
     */

    public function index(){
        echo "index";
        $userModel = new User(); 
        
        echo view('users/index', ['users' => $userModel->findAll()]);
    }

    /**
     * Show one of the users collection
     */
    public function show($id){
        $userModel = new User(); 
        echo view('users/profile', ['user' => $userModel->find($id)]);
    }

    /**
     * Show the page for the creation 
     */
    public function create(){  
        echo "create";
        echo view('users/create');
    }


    /**
     * Save in the database the data of creation
     */
    public function store(){
        echo "store";
        $model = new User();
        if ($this->request->getMethod() === 'post' && $this->validate([
                'user_name' => 'required',
                'user_email'  => 'required'
            ]))
        {
            $model->save([
                'user_name' => $this->request->getPost('user_name'),
                'user_email'  => $this->request->getPost('user_email'),
            ]);
    
            echo view('users/create');
    
        }
    }

    /**
     * Show the page for edit user
     */
    public function edit($id){
        echo "edit";
        $userModel = new User(); 
        echo view('users/edit', ['user' => $userModel->find($id)]);
    }

    /**
     * Update the data in the database
     */
    public function update($id){
        $userModel = new User();
        if ($this->request->getMethod() === 'put' && $this->validate([
                'user_name' => 'required',
                'user_email'  => 'required'
            ]))
        {
            $userModel->update($id, [
                'user_name' => $this->request->getPost('user_name'),
                'user_email'  => $this->request->getPost('user_email'),
            ]);
    
            echo view('users/edit', ['user' => $userModel->find($id)]);
    
        }
    }

    public function delete($id){
        $userModel = new User();
        $user = $userModel->delete($id);
        return $this->response->redirect(site_url('/users'));
    }

}
