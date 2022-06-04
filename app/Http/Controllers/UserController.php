<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Profile;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use App\Http\Requests\userrequest;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        if (Gate::allows('ismodir')) {
            $user = User::all();
            return view('dashboard.actor.user.index', ['user' => $user]);
        }
        else{
        return view('dashboard.actor.user.index', ['user' => auth()->user()]);
        }
        //     abort(404);
        // else{
        // }
    }

    public function showArchitects()
    {

        
        if (Gate::allows('ismodir') || Gate::allows('isadmin')) {
            return view('dashboard.actor.user.index', [
                'user' => User::where('role', 'architect')->get(),
            ]);
        }
        return "Access Denied";
    }

    public function showAdmin()
    {
        if (Gate::allows('ismodir') || Gate::allows('isadmin')) {
            return view('dashboard.actor.user.index', [
                'user' => User::where('role', 'admin')->get()
            ]);
        }
        return 'Access Denied';
    }
    public function showUsers()
    {

        
            
            if(!User::where('role','user')->exists())
            {
                return null;
            }
        if (Gate::allows('ismodir') || Gate::allows('isadmin')) {

            return view('dashboard.actor.user.index', [
                'user' => User::where('role', 'user')->get()
            ]);

          
            
        }
        return 'Access Denied';
    }

    public function create()
    {
        return view('dashboard.actor.user.create');
    }

    public function store(userrequest $request)
    {
        $request->validated();
        $user = User::query()->create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
			'role' => $request->role,

        ]);
        alert()->success('رکورد با موفقیت ثبت شد');

        return  response()->json($user);
    }

    public function edit($id)
    {


        $user = user::find($id);
        

        return response()->json($user);
    }






    public function update(userrequest $request)
    {


        $request->validated();
        $user = User::find($request->id);
        $user->update([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'role' => $request->role,
        ]);

        alert()->success('رکورد با موفقیت اپدیت شد');
        return  response()->json($user);
        // return redirect()->route('user.index');
    }

    public function destroy($id)
    {


        User::find($id)->delete($id);

        return response()->json([

            alert()->success('حذف با موفقیت انجام شد')
        ]);
    }



    public function ShowProfile($id)
    {

       $profile = Profile::where('user_id',$id)->first();

        if (!User::find($id)->profile()->exists()) {

          $profile=false;
         }
 
        return view('dashboard.content.profile.show-profile', [
            'user' => User::find($id), 'profile' => $profile
        ]);
      
      
        
     
    }

    public function showUserProfile(User $user)
    {
        if(!$user->proflie()->exists())
        {
            return 'This user Has No Prifole';
        }
        return view('dashboard.content.profile.profile',[
            'user' => $user->profile()
        ]);
    }

    
}
