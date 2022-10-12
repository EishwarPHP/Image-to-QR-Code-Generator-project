@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    <div class="col-12 mb-3">
                        @if (Session::has('success'))
                            <div class="alert alert-success mb-0">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger mb-0">
                                {{Session::get('error')}}
                            </div>
                        @endif
                    </div>
                    <H4>IMAGE UPLOADER</H4>
                    <br>
                    
                    <form action="{{ route('uploadImage') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label><input type="radio" name="image_type" value="1" required> PORTRAIT</label><br>
                        <label><input type="radio" name="image_type" value="2" required> LANDSCAPE</label><br>
                        <label>SELECT iMAGE</label>
                        <input type="file" name="image" value="" class="form-control" accept="image/png, image/jpeg, image/jpg" required><br>
                        <input type="submit" name="submit" value="Upload Now">
                    </form>
                    <hr>
                    <h4>All Images</h4>
                    <table>
                        @foreach ($uplodimages as $res)
                       
                            {{-- @switch ($res) 
                                @case ($res->image_type==1):
                                    
                                        <td><img src="{{ asset('storage/app/'.$res->image_path) }}" alt="" height="100" width="100"></td>
                                    
                                @break;
                                @case ($res->image_type==2):
                                    <tr>
                                        <td colspan="2">
                                            <img src="{{ asset('storage/app/'.$res->image_path) }}" alt="" height="100" width="200">
                                        </td>
                                    </tr>
                                @default:
                                
                            @endswitch --}}

                            @if($res->image_type==1)
                      
                                <td>
                                    {{-- <img src="{{ asset('images') }}/{{ $res->image_title }}" alt="" height="100" width="100"> --}}
                                    <img src="{{ 'https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl='.asset('images').'/'.$res->image_title.'&chco=#333'}}" alt="" height="100" width="100" style="border: 10px solid #ccc">
                                </td>
                            
                                @elseif($res->image_type==2)
                                <tr>
                                    <td colspan="2">
                                        {{-- <img src="{{ asset('images') }}/{{ $res->image_title }}" alt="" height="200" width="200"> --}}
                                        <img src="{{ 'https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl='.asset('images').'/'.$res->image_title.'&chco=#333'}}" alt="" height="200" width="202"  style="border: 10px solid #ccc">
                                    </td>
                                </tr>
                                @else
                            @endif
                        
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection