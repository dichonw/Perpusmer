@extends('Layout/isUser')

@section('content')
    <div class="container-fluid mx-auto">
        <div class="text-center mt-36">
            <h1 class="text-5xl font-bold">Selamat Datang di <br> <span class="text-green-700">PERPUSMER</span></h1>
            <a href="#buku"><button class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-7 mt-10 rounded-full">Lihat Buku</button></a>
        </div>
        <div id="buku" >
            <div class="text-center mt-36">
                <h2 class="text-3xl font-bold">Daftar <span class="text-green-700">Buku</span> Tersedia</h2>
            </div>
            <div class="container mx-auto mb-52">
                <div class="flex gap-5 h-36 mx-6 my-6 align-middle">
                    @foreach ($buku as $b)
                    <div class="flex-auto">
                        <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-sm">
                          <h5 class="text-gray-900 text-xl leading-tight font-bold"> {{$b->Title}}</h5>
                          <small class="font-bold text-green-700">Oleh : {{$b->Author}}</small>
                          <p class="text-gray-500 text-base mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, voluptatibus?
                          </p>
                          <a href="{{route('detailbukuuser', $b->ID)}}"><button type="button" class=" inline-block px-6 py-2.5 bg-green-700 text-white font-medium 
                          text-xs leading-tight uppercase rounded-full shadow-md
                          hover:bg-green-800 hover:shadow-lg focus:bg-green-700 focus:shadow-lg 
                          focus:outline-none focus:ring-0 active:bg-green-800
                          active:shadow-lg transition duration-150 ease-in-out">Lainya</button></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
    
@endsection


