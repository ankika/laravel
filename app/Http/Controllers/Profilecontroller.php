<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
 // use App\profiles;
 use Auth;

class Profilecontroller extends Controller
{
    public function profile()
    {
    	return view('profile');
    }
    public function addprofile(Request $request)
    {	
         $messsages = array(
        'user_name.required'=>'You cant leave Name field empty',
        'address.required'=>'You cant leave Address field empty',
        'designation.min'=>'You cant leave Designation field empty',
    );
         $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $messages );
    // 	 $validatedData = $request->validate([
    //     'user_name' => 'required',
    //     'address' => 'required',
    //     'designation' => 'required',
    //     'country' => 'required',
    //     'gender' => 'required',
    //     'hobby' => 'required',
    // ]);

  //   	if($validatedData->fails()) {
  //   return Redirect::back()->withErrors($validatedData);
		// }
		 // else{
         if ($validator->passes()) {
	    	$id=Auth::user()->id;
			$profiles= new User;
			// print_r($request->input());die;
	    	$profiles->user_name = $request->input('user_name'); 
	    	$profiles->address = $request->input('address');   	
	    	$profiles->country = $request->input('country');
	    	$profiles->gender = $request->input('gender');
	    	$profiles->hobby = json_encode($request->input('hobby'));
	    	$profiles->name = $request->input('user_name');
	    	$profiles->designation = $request->input('designation');
	    	$profiles->save();
    	 }
    }

// foreach ($request->input("hobby") as $hobby){
//         $add_hobby = new Hobbies;
//         $add_hobby->name= $hobby;
//         $add_hobby->save();
// }
 public function list()
    {
        // $Data = Data::where('user_id', auth()->user()->id)->get();
        return view('listing');
    }
}
        
