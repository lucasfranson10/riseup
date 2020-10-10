<?php namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    /**
     * Show all the users
     */

    public function index(){
        
        $userModel = new User(); 
        
        echo view('users/index', ['users' => $userModel->findAll()]);
    }

    /**
     * Show one of the users collection
     */
    public function show(){
        return 'show';
    }

    /**
     * Show the page for the creation 
     */
    public function create(){  
        echo view('users/create');
    }


    /**
     * Save in the database the data of creation
     */
    public function store(){
        $model = new User();
        if ($this->request->getMethod() === 'post' && $this->validate([
                'user_name' => 'required',
                'user_email'  => 'required'
            ]))
        {
            echo $model->save([
                'user_name' => $this->request->getPost('user_name'),
                'user_email'  => $this->request->getPost('user_email'),
            ]);
    
            echo view('users/create');
    
        }
    }

    /**
     * Show the page for edit user
     */
    public function edit(){
        return 'edit';
    }

    /**
     * Update the data in the database
     */
    public function update(){
        return 'update';
    }

    public function delete(){
        return 'delete';
    }

    /**
     * Validation of request
     */
    private function validateReq(){

        return /* request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]) */;
    }

}
