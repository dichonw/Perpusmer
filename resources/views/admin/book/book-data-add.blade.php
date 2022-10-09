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
    <h2 class="text-slate-700 font-bold p-4 ml-2 mt-4 text-3xl">Tambah Data Buku</h2>
    <div class="p-5">
        <div class="block p-6 rounded-lg shadow-lg bg-slate-100 max-w-sm">
            <form action="{{url('/addbuku')}}" method="POST">
              @csrf
              <div class="form-group mb-4">
                <label for="" class="form-label inline-block mb-2 text-gray-700">Judul</label>
                <input type="text" class="form-control
                  block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                  border border-solid border-gray-300 rounded transition ease-in-out m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                  id="judul" name="judul" placeholder="Judul">
              </div>
              <div class="form-group mb-4">
                <label for="" class="form-label inline-block mb-2 text-gray-700">Pengarang</label>
                <input type="text" class="form-control block
                  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                  border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 
                  focus:bg-white focus:border-blue-600 focus:outline-none" id="pengarang" name="pengarang"
                  placeholder="Pengarang">
              </div>
              <div class="form-group mb-4">
                <label for="" class="form-label inline-block mb-2 text-gray-700">Penerbit</label>
                <input type="text" class="form-control block
                  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                  border border-solid border-gray-300 rounded transition ease-in-out
                  m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  id="penerbit" name="penerbit"placeholder="Penerbit">
              </div>
              <div class="form-group mb-4">
                <label for="" class="form-label inline-block mb-2 text-gray-700">Kategori</label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="kategori" name="kategori">
                    <option value="RELIGION">Religion</option>
                    <option value="CULTURES">Cultures</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="form-group mb-4">
                <label for="" class="form-label inline-block mb-2 text-gray-700">Tahun</label>
                <input type="number" class="form-control block
                  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                  border border-solid border-gray-300 rounded
                  transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                  id="tahun" name="tahun"placeholder="Tahun">
              </div>
              <div class="form-group mb-4">
                <label for="" class="form-label inline-block mb-2 text-gray-700">Boleh Pinjam?</label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="boleh_pinjam" name="boleh_pinjam">
                    <option value="Y">Ya</option>
                    <option value="T">Tidak</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="form-group mb-4">
                <label for="" class="form-label inline-block mb-2 text-gray-700">Pinjam/hari</label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="pinjam_hari" name="pinjam_hari">
                    <option value="7">7 Hari</option>
                    <option value="4">4 Hari</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="form-group mb-4">
                <label for="" class="form-label inline-block mb-2 text-gray-700">Status</label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="status" name="status">
                    <option value="ADA">Ada</option>
                    <option value="KELUAR">Keluar</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="form-group mb-4">
                <label for="" class="form-label inline-block mb-2 text-gray-700">Tipe</label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="tipe" name="tipe">
                    <option value="BE">BE</option>
                    <option value="BBI">BUKU BAHASA INGGRIS</option>
                    <option value="BI">BI</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="form-group mb-4">
                <label for="" class="form-label inline-block mb-2 text-gray-700">Kondisi</label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="kondisi" name="kondisi">
                    <option value="BAIK">BAIK</option>
                    <option value="RUSAK">RUSAK</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <a href=""><button type="submit" class="p-2 my-3 bg-green-900 rounded-md text-white
                cursor-pointer hover:bg-green-600 w-full">Tambah</button></a>
            </form>
            <a href="{{url('/buku')}}"><button class="p-2 my-3 bg-red-900 rounded-md text-white
                cursor-pointer hover:bg-red-600 w-full">Kembali</button></a>
          </div>
    </div>
@endsection


