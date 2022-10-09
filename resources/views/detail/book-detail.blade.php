@extends('Layout/isUser')

@section('content')
    <div class="container-fluid mx-auto">
          <h2 class="text-slate-700 font-bold p-4 text-center mt-4 text-3xl">Detail Data Buku</h2>
          <div class="p-5">
            <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-sm mx-auto">
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Judul :</h5>
              <p class="text-gray-700 text-base mb-4">
                {{$buku->Title}}
              </p>
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Sinopsis :</h5>
              <p class="text-gray-700 text-base mb-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque rem vitae quod aliquam, molestiae animi?
              </p>
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Pengarang :</h5>
              <p class="text-gray-700 text-base mb-4">
                {{$buku->Author}}
              </p>
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Penerbit :</h5>
              <p class="text-gray-700 text-base mb-4">
                {{$buku->Publisher}}
              </p>
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Kategori :</h5>
              <p class="text-gray-700 text-base mb-4">
                {{$buku->Category}}
              </p>
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Tahun :</h5>
              <p class="text-gray-700 text-base mb-4">
                {{$buku->Year}}
              </p>
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Bisa Pinjam? :</h5>
              <p class="text-gray-700 text-base mb-4">
                {{$buku->AllowingToLoan}} 
              </p>
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Pinjam/hari :</h5>
              <p class="text-gray-700 text-base mb-4">
                {{$buku->DaysToLoan}} 
              </p>
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Status :</h5>
              <p class="text-gray-700 text-base mb-4">
                {{$buku->Status}} 
              </p>
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Tipe :</h5>
              <p class="text-gray-700 text-base mb-4">
                {{$buku->Type}} 
              </p>
              <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Kondisi :</h5>
              <p class="text-gray-700 text-base mb-4">
                {{$buku->Condition}} 
              </p>
              <a href="{{url('/homeuser')}}"><button class="p-2 my-3 bg-green-700 rounded-full text-white
                cursor-pointer hover:bg-green-800 w-full">Kembali</button></a>
            </div>
          </div>
    </div>
    
@endsection


