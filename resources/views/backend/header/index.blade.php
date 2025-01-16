@extends('backend.layout')
@section('content')
<div class=" p-6">
    <div class=" bg-white rounded p-9">
        <form action="{{route('header.update',$header->id)}}" class=" grid grid-cols-12 gap-5" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('put')
            <div class=" col-span-6">
                <input class=" w-full block bg-gray-100 py-2 px-4 text-lg rounded mb-2" type="text" placeholder="Header Title" name="title" value="{{$header->title}}">
                <textarea class=" w-full block bg-gray-100 py-2 px-4 text-lg rounded mb-2" name="sub_title" id="" cols="30" rows="7">{{$header->sub_title}}</textarea>
                <input name="image" type="file" accept="image/*">
                <input class=" w-full bg-blue-500 text-lg py-2 text-white my-3 cursor-pointer" type="submit" value="Update">
            </div>
            <div class="col-span-6">
                <img class=" w-full " src="{{asset('img/'.$header->image)}}" alt="">
            </div>
        </form>
    </div>
</div>

@endsection
