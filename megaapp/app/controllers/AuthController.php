<?php
use \MegaApp\Repository\UserRepository\UserRepositoryInterface;

class AuthController extends BaseController {

    protected $userRepo;
    public  function __construct(UserRepositoryInterface $repo)
    {
        $this->userRepo = $repo;
        $this->userRepo->setUser(Auth::user());
    }

    public function getRegisterForm()
    {
        return View::make('auth.registerform');
    }

    public function getLoginForm()
    {
        return View::make('auth.loginform');
    }

    public function postRegisterForm()
    {
        $nick = Input::get('nickname');
        $email = Input::get('email');
        $pass = Input::get('password');
        $validator = Validator::make(Input::all(),
            array(
                'nickname' => 'required|min:3|alpha_num|unique:users,nickname',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6'
            ),
            array(
                'required' => 'Please enter :attribute!',
                'nickname.required' => 'Nickname should be specified!'
            ));
        if($validator->fails())
        {
            return Redirect::action('AuthController@getRegisterForm')->withErrors($validator);
        }
        $user = new User;
        $user->nickname = $nick;
        $user->email = $email;
        $user->password = Hash::make($pass);
        $user->save();
        return Redirect::action('AuthController@getLoginForm');
    }

    public function postLoginForm()
    {
        $email = Input::get('email');
        $pass = Input::get('password');
        $validator = Validator::make(Input::all(),
            array(
                'email' => 'required|email',
                'password' => 'required'
            ),
            array(
                'required' => 'Please enter :attribute!',
            ));
        if($validator->fails())
        {
            return Redirect::action('AuthController@getLoginForm')->withErrors($validator);
        }
        if(Auth::attempt(array('email' => $email, 'password' => $pass))) {
            return Redirect::to('/');
        }
        return View::make('auth.loginform', array('error' => 'Invalid login/pass!'));
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

}
