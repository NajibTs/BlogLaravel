
@extends('layouts.app')
<div style="box-sizing: border-box; width: 100%; padding: 5px;">
@section('content')

<div style=" width:100%; height:645px; background:#abb5b0;padding:5% 0 0% 0; overflow:hidden ">
    <div  class="jumbotron text-center">
        <h1>Welcome To My Blog!</h1>
        
    </div>
    <div style="display:flex; justify-content:space-between; justify-items:center">
    <img style="width:460px; margin-left:8%; padding-bottom:20px " src="/storage/cover_images/draw.svg" />
   <a href="/dashboard" style="margin-right:50px"> <div style="border-radius: 30px; padding:15px 25px; background:white; width:100%; height:80px; margin-right:20%; margin-top:200px; font-size:30px">Add your post here</div></a>
    </div>

</div>
</div>
@endsection

