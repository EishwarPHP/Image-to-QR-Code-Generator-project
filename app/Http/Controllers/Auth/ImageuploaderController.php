<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\User;

class ImageuploaderController extends Controller
{
    public function uploadImage(Request $request)
    {
        // return $request;

        // $validatedData = $request->validate([
        //  'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:200048',

        // ]);
        $image = getimagesize($request->image);
        $width = $image[0];
        $height = $image[1];

        if ($width <= $height) {
                $imagetypo = 1;
        }else{
                $imagetypo = 2;
        }

        $lstimgcheck = DB::table('image_gallery')->where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->first();

        // return $lstimgcheck->image_type;
        if(!isset($lstimgcheck)){
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move('Images', $filename);
                // $data['image']= $filename;

                $addimage = array(
                    'user_id' => Auth::user()->id,
                    'image_title' => $filename,
                    'image_path' => $file,
                    'image_type' => $imagetypo,
                    'portrait_no' =>1,
                    'image_qr' => 'qr',
                );

                $data = DB::table('image_gallery')->insert($addimage);

                if ($data) {
                    return redirect('dashboard')->with('success', 'Image Has been uploaded');
                } else {
                    return redirect('dashboard')->with('error', 'Image not uploaded');
                }
            } 
        }elseif($lstimgcheck->image_type==2 && $imagetypo==1){
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move('Images', $filename);
                // $data['image']= $filename;

                $addimage = array(
                    'user_id' => Auth::user()->id,
                    'image_title' => $filename,
                    'image_path' => $file,
                    'image_type' => $imagetypo,
                    'portrait_no' =>1,
                    'image_qr' => 'qr',
                );

                $data = DB::table('image_gallery')->insert($addimage);

                if ($data) {
                    return redirect('dashboard')->with('success', 'Image Has been uploaded');
                } else {
                    return redirect('dashboard')->with('error', 'Image not uploaded');
                }
            } 
        }else{
            $lastimage = DB::table('image_gallery')->where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->first();
            
                if($lastimage->portrait_no==1 && $imagetypo==1){
                    
                        if ($request->file('image')) {
                            $file = $request->file('image');
                            $filename = date('YmdHi') . $file->getClientOriginalName();
                            $file->move('Images', $filename);
                            // $data['image']= $filename;
            
                            $addimage = array(
                                'user_id' => Auth::user()->id,
                                'image_title' => $filename,
                                'image_path' => $file,
                                'image_type' => $imagetypo,
                                'portrait_no' =>2,
                                'image_qr' => 'qr',
                            );
            
                            $data = DB::table('image_gallery')->insert($addimage);
            
                            if ($data) {
                                return redirect('dashboard')->with('success', 'Image Has been uploaded');
                            } else {
                                return redirect('dashboard')->with('error', 'Image not uploaded');
                            }
                        }
                }else{
                    $lastimage = DB::table('image_gallery')->where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->first();

                    if($lastimage->portrait_no==2 && $imagetypo==2){

                        if ($request->file('image')) {
                            $file = $request->file('image');
                            $filename = date('YmdHi') . $file->getClientOriginalName();
                            $file->move('Images', $filename);
                            // $data['image']= $filename;
            
                            $addimage = array(
                                'user_id' => Auth::user()->id,
                                'image_title' => $filename,
                                'image_path' => $file,
                                'image_type' => $imagetypo,
                                'image_qr' => 'qr',
                            );
            
                            $data = DB::table('image_gallery')->insert($addimage);
            
                            if ($data) {
                                return redirect('dashboard')->with('success', 'Image Has been uploaded');
                            } else {
                                return redirect('dashboard')->with('error', 'Image not uploaded');
                            }
                        }
                }elseif($lastimage->portrait_no!=2 && $imagetypo==2) {
                    return redirect('dashboard')->with('error', 'Please upload Portrait Image');
                }else{
                    return redirect('dashboard')->with('error', 'Please upload Landscape Image');
                }
                }
        }


    }
}
