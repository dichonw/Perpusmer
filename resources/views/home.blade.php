@extends('Layout/isAdmin')

@section('content')
    <div class="w-full h-20 bg-slate-100">
        @if ( session()->get('token') != NULL )
            <div class="float-right inline-flex py-6">
                <h2 class="text-slate-900 mt-0.5">Selamat Datang,
                <span class="font-bold">{{session()->get('nama')}}</span></h2>
                <form method="POST" action={{ route('logoutaction') }}>
                    @csrf
                    <input name="token" type="hidden" value={{session()->get('token')}} />
                    <button><i class="fa fa-sign-out px-2 py-2 mx-5 bg-green-900 rounded-md text-white
                        cursor-pointer hover:bg-green-600"></i></button>
                </form>
            </div>
        @endif
    </div>
    <h2 class="text-slate-700 font-bold p-4 ml-2 my-4 text-3xl">Dashboard</h2>
    <div class="flex gap-5 h-36 mx-6">
        <div class="flex-auto bg-slate-100 w-50 h-50 rounded-md flex">
            <div class="py-8 px-10 bg-green-700 rounded-l-md"> 
                <i class="fa fa-user text-white text-7xl"></i>
            </div>
            <h5 class="ml-4 pt-3 text-black font-bold text-xl">Total User<br>
                <span class="text-6xl">{{$total_user}}</span></h5>
        </div>
        <div class="flex-auto bg-slate-100 w-50 h-50 rounded-md flex">
            <div class="py-8 px-10 bg-green-700 rounded-l-md"> 
                <i class="fa fa-users text-white text-7xl"></i>
            </div>
            <h5 class="ml-4 pt-3 text-black font-bold text-xl">Total Member<br>
                <span class="text-6xl">{{$total_member}}</span></h5>
        </div>
        <div class="flex-auto bg-slate-100 w-50 h-50 rounded-md flex">
            <div class="py-8 px-10 bg-green-700 rounded-l-md"> 
                <i class="fa fa-book text-white text-7xl"></i>
            </div>
            <h5 class="ml-4 pt-3 text-black font-bold text-xl">Total Buku<br>
                <span class="text-6xl">{{$total_buku}}</span></h5>
        </div>
    </div>
@endsection


