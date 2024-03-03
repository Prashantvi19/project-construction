<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;

class IndexController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $data = contact::get();

    return view('admin_pages.index1', compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function store_product(Request $request)
  {
    $validated = $request->validate([
      'email'   => 'required|email|unique:product_table', // Replace 'your_table_name' with the actual table name
    ]);

    $image = "";
    if ($request->hasFile('project_image')) {
      $file  = $request->file('project_image');
      $image = time() . '.' . $file->getClientOriginalExtension();
      $destinationPath = public_path('/assets1/saveimage');
      $file->move($destinationPath, $image);
    }
    $insert['client_name'] = $request['client_name'];
    $insert['number']      = $request['number'];
    $insert['email']       = $request['email'];
    $insert['location']    = $request['location'];
    $insert['area']        = $request['area'];
    $insert['date']        = $request['date'];
    $insert['project_image']       = $image;
    $insert['project_description'] = $request['project_description'];
    $insert['created_at']          = Carbon::now();

    $data =  Product::insert($insert);

    if (!empty($data)) {
      return redirect()->back()->with(['success' => 'successful Add producrt!']);
    } else {
      return redirect()->back()->with(['error' => 'Please try again']);
    }
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name'    => 'required',
      'email'   => 'required|email|unique:contact_table', // Replace 'your_table_name' with the actual table name
      'subject' => 'required',
      'message' => 'required',
    ]);

    $insert['name']    = $request['name'];
    $insert['email']   = $request['email'];
    $insert['subject'] = $request['subject'];
    $insert['message'] = $request['message'];
    $insert['created_at'] = Carbon::now();
    $data =  Contact::insert($insert);
    if (!empty($data)) {
      return redirect()->back()->with(['success' => 'successful send massage!']);
    } else {
      return redirect()->back()->with(['error' => 'Please try again']);
    }
  }

  /**
   * Display the specified resource.
   */
  public function show_product()
  {
    $data = Product::get();
    return view('admin_pages.product_data', compact('data'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function project()
  {
    $data = Product::get();
    return view('web_pages.project-grid', compact('data'));
  }

  /**++++++
   * Update the specified resource in storage.
   */
  public function password(Request $request)
  {
    $validated = $request->validate([
      'email'     => 'required',
      'password'     => 'required',
      'newpassword'  => 'required|min:8',
    ]);
    $email    = $request['email'];
    $check    = $request['password'];
    $recheck1 = $request['newpassword'];
    $recheck  = $request['renewPassword'];
    //   $id = User::all();
    //   foreach ($id as $user) {
    //     // Make sure each $user has an "email" property
    //     $email = $user->email;
    //     dd($email);

    // }
    $data = User::where('email', $email)->first();
    $password = $data->password;
    if (!empty(Hash::check($check, $password))) {
      if (!empty($recheck1 == $recheck)) {
        $newpasswor['password'] = Hash::make($request['newpassword']);
        $quer = User::where('email', $email)->update($newpasswor);
        if ($quer) {
          return redirect()->back()->with(['success' => 'successful change password !']);
        } else {
          return redirect()->back()->with(['error' => 'plese try again']);
        }
      } else {
        return redirect()->back()->with(['error' => 're-enter password not match']);
      }
    } else {
      return redirect()->back()->with(['error' => 'Old password not match']);
    }
  }
  public function email_request_password(Request $request)
  {
    //  dd($request);
    $validated = $request->validate([
      'email'     => 'required',
      'password'     => 'required',
      'renewPassword'  => 'required|min:8',
    ]);
    $email    = $request['email'];
    $recheck1 = $request['password'];
    $recheck  = $request['renewPassword'];

    $data = User::where('email', $email)->first();
    if (!empty($data)) {
      if (!empty($recheck1 == $recheck)) {
        $newpassword['password'] = Hash::make($request['renewPassword']);
        // $quer = User::where('email', $email)->update('password',$newpassword);
        $quer = User::where('email', $email)->update($newpassword);
        if ($quer) {
          return redirect()->back()->with(['success' => 'successful change password !']);
        } else {
          return redirect()->back()->with(['error' => 'plese try again']);
        }
      } else {
        return redirect()->back()->with(['error' => 're-enter password not match']);
      }
    }else {
      return redirect()->back()->with(['error' => 'email is not exist']);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $data =  Contact::where('id', $id)->delete();
    return redirect()->back();
  }

  public function destroy2(string $id)
  {
    $data =  Product::where('id', $id)->delete();
    return redirect()->back();
  }

  public function project_id(string $id)
  {
    $data =  Product::where('id', $id)->first();
    return view('web_pages.project-details', compact('data'));
  }

  public function store_service(Request $request)
  {
    $image = "";
    if ($request->hasFile('service_image')) {
      $file  = $request->file('service_image');
      $image = time() . '.' . $file->getClientOriginalExtension();
      $destinationPath = public_path('/assets1/saveimage');
      $file->move($destinationPath, $image);
    }

    $insert['title']    = $request['title'];
    $insert['number']   = $request['number'];
    $insert['date']     = $request['date'];
    $insert['service_image']    = $image;
    $insert['sort_description'] = $request['sort_description'];
    $insert['created_at'] = Carbon::now();
    $data =  Service::insert($insert);
    if (!empty($data)) {
      return redirect()->back()->with(['success' => 'successful send massage!']);
    } else {
      return redirect()->back()->with(['error' => 'Please try again']);
    }
  }
  public function show_service()
  {
    $data = Service::get();
    return view('admin_pages.service_data', compact('data'));
  }

  public function destroy3(string $id)
  {
    $data =  Service::where('id', $id)->delete();
    return redirect()->back();
  }

  public function service_data()
  {
    $data = Service::get();
    return view('web_pages.service', compact('data'));
  }
}
