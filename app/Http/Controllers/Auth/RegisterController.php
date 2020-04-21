<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    public function register(Request $request)
    {
        $this->validate($request,[
            'membType'=> 'required',
            'businessNature'=> 'required',
            'specNature'=> 'required',
            'repBy'=> 'required',
            'memberName'=> 'required',
            'image' => 'required|image|max:2048',
            'ComName'=> 'required',
            'Desg'=> 'required',
            'StrNo1'=> 'required',
            'Zipcode1'=> 'required',
            'city1'=> 'required',
            'country1'=> 'required',
            'StrNo2' => 'required',
            'Zipcode2' => 'required',
            'city2' => 'required',
            'country2' => 'required',
            'PhnOffice' => 'required',
            'PhnRes' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'skype' => 'required',
            'web' => 'required',
            'mobile' => 'required',
            'password' => 'required',
            'confpass' => 'required',
            'proposerName' => 'required',
            'proposerNo' => 'required',
            'seconderName' => 'required',
            'seconderNo' => 'required',
            'qualification' => 'required',
            'JoinDate' => 'required',
            'association' => 'required', 

        ]);
        
      
        $users = new User;
        $users->membType =$request->input('membType');
        $users->businessNature =$request->input('businessNature');
        $users->specNature =$request->input('specNature');
        $users->repBy =$request->input('repBy');
        $users->memberName =$request->input('memberName');
        $users->image =$request->input('image'); //$image_file=$request->user_image;
        $image = Image::make($image_file);
        Response::make($image->encode('jpeg'));
        
        $users->ComName =$request->input('ComName');
        $users->Desg =$request->input('Desg');
        $users->StrNo1 =$request->input('StrNo1');
        $users->Zipcode1 =$request->input('Zipcode1');
        $users->city1 =$request->input('city1');
        $users->country1 =$request->input('country1');
        $users->StrNo2 =$request->input('StrNo2');
        $users->Zipcode2 =$request->input('Zipcode2');
        $users->city2 =$request->input('city2');
        $users->country2 =$request->input('country2');
        $users->PhnOffice =$request->input('PhnOffice');
        $users->PhnRes =$request->input('PhnRes');
        $users->fax =$request->input('fax');
        $users->email =$request->input('email');
        $users->skype =$request->input('skype');
        $users->web =$request->input('web');
        $users->mobile =$request->input('mobile');
        $users->password =$request->input('password');
        $users->confpass =$request->input('confpass');
        $users->proposerName =$request->input('proposerName');
        $users->proposerNo =$request->input('proposerNo');
        $users->seconderName =$request->input('seconderName');
        $users->seconderNo =$request->input('seconderNo');
        $users->qualification =$request->input('qualification');
        $users->JoinDate =$request->input('JoinDate');
        $users->association =$request->input('association');
        $users->save();
        return redirect('/')->with('response','Registration completed');
        
    }

    use RegistersUsers;

    function index()
    {
        $data = Images::latest()->paginate(5);
        return view('store_image',compact('data'))->with('i', (request()->input('page',1)-1)*5);

    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        dd($data);
        return Validator::make($data, [
            'membType'=>'required',
            'businessNature'=>'required',
            'specNature'=>'required',
            'repBy'=>'required',
            'memberName' => ['required', 'string', 'max:255'],
             'image' => 'required',
            'ComName'=> 'required',
            'Desg'=> 'required',
            'StrNo1'=> 'required',
            'Zipcode1'=> 'required',
            'city1'=> 'required',
            'country1'=> 'required',
            'StrNo2' => 'required',
            'Zipcode2' => 'required',
            'city2' => 'required',
            'country2' => 'required',
            'PhnOffice' => 'required',
            'PhnRes' => 'required',
            'fax' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'skype' => 'required',
            'web' => 'required',
            'mobile' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'confpass' => 'required',
            'proposerName' => 'required',
            'proposerNo' => 'required',
            'seconderName' => 'required',
            'seconderNo' => 'required',
            'qualification' => 'required',
            'JoinDate' => 'required',
            'association' => 'required', 

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'membType'=>$data['membType'],
            'businessNature'=>$data['businessNature'],
            'specNature'=>$data['specNature'],
            'repBy'=>$data['repBy'],
            'memberName' => $data['memberName'],
            'image' => $data['image'],
            'ComName'=>$data['ComName'],
            'Desg'=>$data['Desg'],
            'StrNo1'=>$data['StrNo1'],
            'Zipcode1'=>$data['Zipcode1'],
            'city1'=>$data['city1'],
            'country1'=>$data['country1'],
            'StrNo2'=>$data['StrNo2'],
            'Zipcode2'=>$data['Zipcode2'],
            'city2'=>$data['city2'],
            'country2'=>$data['country2'],
            'PhnOffice'=>$data['PhnOffice'],
            'PhnRes'=>$data['PhnRes'],
            'fax'=>$data['fax'],
            'email' => $data['email'],
            'skype'=> $data['skype'],
            'web' => $data['web'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
            'confpass' => Hash::make($data['password']),
            'proposerName'=>$data['proposerName'],
            'proposerNo'=>$data['propserNo'],
            'seconderName'=>$data['seconderName'],
            'seconderNo'=>$data['seconderNo'],
            'qualification'=>$data['qualification'],
            'JoinDate'=>$data['JoinDate'],
            'association'=>$data['association'],
        ]);
    }
}
