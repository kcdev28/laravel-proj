<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Resident;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function showForm() {
        return view('index');
    }

    public function register(Request $request){
        try {
           
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'street' => 'required',
                'area' => 'required',
                'dob' => 'required',
                'gender' => 'required',
                'civil_status' => 'required',
                'contact' => 'required',
                'religion' => 'required',
                'voter_status' => 'required',
                'username' => 'required|unique:tbl_user',
                'password' => 'required', 
                'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'valid_id' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            
            $profilePicPath = null;
            if ($request->hasFile('profile_pic')) {
                $file = $request->file('profile_pic');
                $filename = time() . '_profile_' . $file->getClientOriginalName();
                $profilePicPath = $file->storeAs('profile_pics', $filename, 'public');
            }

            $validIdPath = null;
            if ($request->hasFile('valid_id')) {
                $file = $request->file('valid_id');
                $filename = time() . '_valid_id_' . $file->getClientOriginalName();
                $validIdPath = $file->storeAs('valid_ids', $filename, 'public');
            }

       
            $user = User::create([
                
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role' => 1,
            ]);
             
       
            Resident::create([
                'userID' => $user->userID,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'suffix' => $request->suffix,
                'profile_image' => $profilePicPath,
                'street' => $request->street,
                'area' => $request->area,
                'barangay' => $request->barangay,
                'city' => $request->city,
                'date_of_birth' => $request->dob,
                'gender' => $request->gender,
                'civil_status' => $request->civil_status,
                'contact_no' => $request->contact,
                'religion' => $request->religion,
                'voter_status' => $request->voter_status,
                'precint_no' => $request->precint_no,
                'occupation' => $request->occupation,
                'employment_status' => $request->employment_status,
                'special_group_status' => $request->special_group_status,
                'verify_img' => $validIdPath,
        
            ]);

       
            return redirect()->back()->with('success', 'Registration successful! Your account is pending approval.');

        } catch (\Exception $e) {
          
            return redirect()->back()->with('error', 'Registration failed! ' . $e->getMessage());
        }
    }
}