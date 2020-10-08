<?php namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    /**
     * Show all the users
     */

    public function index(){
        
        $userModel = new User();
        $string = $userModel->where(['user_id =' => 1])->get();
        
        var_dump($userModel->find(1)) ;
       //dd( $this->db->table('user')->where(['user_id =' => '1']) );
      //  return view('users/index');
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
        return 'create';
    }


    /**
     * Save in the database the data of creation
     */
    public function store(){
        return 'store';
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
