<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use App\Models\logo;
use Auth;

class loginController extends Controller
{


    public function  getLogin(){
        $logos =  logo::All();
        return view('admin.auth.login', compact('logos'));
    }


    public function save(){

        $admin = new App\Models\Admin();
        $admin -> name ="admin@admin";
        $admin -> email ="admin@gmail.com";
        $admin -> password = bcrypt("admin@admin");
        $admin -> save();

    }


    public function login(LoginRequest $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)){
           // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admin.dashboard');
        }
       // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }



   public function logout()
   {
       if(Auth::guard('admin')->check()) // this means that the admin was logged in.
       {
           Auth::guard('admin')->logout();
           return redirect()->route('login');
       }

   }

}
