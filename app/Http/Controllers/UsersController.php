<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth',[
            'except' => ['show','create','store','index']
        ]);

        $this->middleware('guest',[
            'only' =>['create']
        ]);
    }
    public function index(){
        $users = User::paginate(6);
        return view('users.index',compact('users'));
    }
    public function create(){
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'  => 'required|unique:users|min:3|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]
        );
        Auth::login($user);
        session()->flash('success','欢迎，您将在这里开始一段新的旅程');
        return redirect()->route('users.show',[$user]);
    }

    public function edit(User $user){
        $this->authorize('update',$user);
        return view('users.edit',compact('user'));
    }

    public function update(User $user,Request $request){
        $this->authorize('update',$user);
       $this->validate($request,[
            'name' => 'required|unique|min:3|max:50',
            'password'=>'nullable|confirmed|min:6'
       ]);
       $data = [];
       $data['name'] = $request->name;
       $user->update([
           'name' => $request->name,
           'password'=>bcrypt($request->password)
       ]);
       return redirect()->route('users.show',$user->id);
    }

    public function destory(User $user){
        $this->authorize('destory',$user);
        $user->delete();
        session()->flash('success','成功删除用户');
        return back();
    }
}
