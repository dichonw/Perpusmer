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
    <h2 class="text-slate-700 font-bold p-4 ml-2 mt-4 text-3xl">Detail Data Member</h2>
    <div class="p-5">
      <div class="block p-6 rounded-lg shadow-lg bg-slate-100 max-w-sm">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">MemberID :</h5>
        <p class="text-gray-700 text-base mb-4">
          {{$member->MemberID}}
        </p>
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Nama :</h5>
        <p class="text-gray-700 text-base mb-4">
          {{$member->Name}}
        </p>
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Alamat :</h5>
        <p class="text-gray-700 text-base mb-4">
          {{$member->Address}}
        </p>
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">No.Tlp :</h5>
        <p class="text-gray-700 text-base mb-4">
          {{$member->Phone}}
        </p>
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">No.HP :</h5>
        <p class="text-gray-700 text-base mb-4">
          {{$member->HP}}
        </p>
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Tgl.Daftar :</h5>
        <p class="text-gray-700 text-base mb-4">
          {{$member->Date}}
        </p>
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Maks.Pinjam :</h5>
        <p class="text-gray-700 text-base mb-4">
          {{$member->MaxLoan}} hari
        </p>
        <a href="{{url('/member')}}"><button class="p-2 my-3 bg-red-900 rounded-md text-white
          cursor-pointer hover:bg-red-600 w-full">Kembali</button></a>
      </div>
    </div>
@endsection


