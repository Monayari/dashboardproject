<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Citie;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Profilerequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function index()
    {
        $profile = Profile::find(auth()->user()->id);
        $province = Province::all();

        if (!auth()->user()->profile()->exists()) {
            $profile = false;
            return view('dashboard.content.profile.profile', [
                'user' => auth()->user(), 'profile' => $profile, 'province' => $province
            ]);
        }
            $city = Citie::find($profile->citie_id);
            $state = Province::find($profile->province_id);
            return view('dashboard.content.profile.profile', [
                'user' => auth()->user(), 'profile' => $profile, 'province' => $province, 'city' => $city, 'state' => $state
            ]);

    }


    public function getprovince()
    {
        // $data['provinces']=Province::get(["name","id"]);
        $province = Province::all();
        return view('dashboard.content.profile.profile', compact($province));
    }

    public function getcity(Request $request)
    {
        $data['cities'] = Citie::where('province_id', $request->province_id)->get(["name", "id"]);
//  $city=Citie::where('province_id',$request->province_id)->get("name","id");
        return response()->json($data);
    }

    public function create()
    {

        return view('dashboard.content.profile.create', [

            'user' => auth()->user()
        ]);
    }


    public function store(Profilerequest $request)
    {


        if ($request->has('img')) {

            $fileName = $request->file('img')->getClientOriginalName();

            $request->file('img')->move('images/profile', $fileName);

        } else {

            $fileName = null;
        }


        Profile::create([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'biography' => $request->biography,
            'favoraite' => $request->favoraite,
            'province_id' => $request->province_id,
            'citie_id' => $request->citie_id,
            'img' => $fileName,
            'user_id' => auth()->user()->id

        ]);

        alert()->success('رکورد با موفقیت ثبت شد');
        return redirect()->route('dashboard.profile.index');

    }


    // public function storeuser(Profilerequest $request,$id)
    // {
    //      $user = User::find($id);

    //      if ($request->has('img')) {

    //         $fileName = $request->file('img')->getClientOriginalName();

    //        $request->file('img')->move('images/profile', $fileName);

    //     }

    //     else{
    //         $fileName=null;
    //     }

    // Profile::create([

    //     'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'biography' => $request->biography,
    //         'favoraite' => $request->favoraite,

    //        'user_id' =>$user->id,
    //        'img' => $fileName,
    //  ]);


    //  /*Profile::create(array_merge($fields, [
    //     'img' => $fileName
    //  ]));*/

    //     alert()->success('رکورد با موفقیت ثبت شد');

    //     return back();

    // }
    public function edit($id)
    {


        $profile = Profile::find($id);
        $province = Province::all();
        return view('dashboard.content.profile.edit', compact('profile'), compact('province'));
    }

    public function update(Profilerequest $request, $id)
    {

        $request->Validated();
        $profile = Profile::find($id);
        $user = User::find($profile->user_id);


        if ($request->has('img')) {

            $destintion = 'images/profile/' . $profile->img;

            if (File::exists($destintion)) {
                File::delete($destintion);
            }
            $fileName = $request->file('img')->getClientOriginalName();


            $request->file('img')->move('images/profile', $fileName);
            $profile->img = $fileName;

        } else {
            $fileName = null;
        }

        $profile->update([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'biography' => $request->biography,
            'favoraite' => $request->favoraite,
            'province_id' => $request->province_id,
            'citie_id' => $request->citie_id,
            'img' => $fileName,


        ]);

        alert()->success('رکورد با موفقیت اپدیت شد');


        return redirect()->route('profile.index');


    }


    public function destroy($id)
    {

        Profile::find($id)->delete($id);

        return back();
    }

}
