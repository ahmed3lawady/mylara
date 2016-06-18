<?php

class UsersController extends BaseController {

	public function index()
	{
        $data['allUsers'] = User::all();
		return View::make('backend.users.list', $data);
	}
    
    public function create()
    {
        if (Request::isMethod('post'))
        {
            $user = new User;
            $user->us_fullname  = Input::get('fullname');
            $user->us_email     = Input::get('email');
            $user->password  = Hash::make(Input::get('password'));
            $user->us_status    = Input::get('status');
            $user->save();
            return Redirect::to('admincp/newUser');
        }
        $data['title'] = trans('users.create-user');
        return View::make('backend.users.form', $data);
    }
    
    public function update($id)
    {
        if (Request::isMethod('post'))
        {
            $user = User::find(Input::get('userId'));
            $user->us_fullname  = Input::get('fullname');
            if(!empty(Input::get('password'))) {
                $user->us_password = Hash::make(Input::get('password'));
            }
            $user->us_status    = Input::get('status');
            if($user->save){
                return Redirect::to('admincp/users');
            }else{
                return Redirect::to('admincp/updateUser/'.Input::get('userId'));
            }
        }
        $data['title'] = trans('users.update-user');
        $data['userData'] = User::find($id);
        return View::make('backend.users.form', $data);
    }

    public function delete($id){
        $user = User::destroy($id);
        return Redirect::to('admincp/users');
    }
}
