<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;800&display=swap" rel="stylesheet">
</head>
<body class="flex font-['Inter']">
    <div class="w-full max-w-xs m-auto mt-28">
        <div class="block p-6 rounded-lg shadow-lg bg-slate-100 max-w-sm">
            <h2 class="text-green-700 text-center font-bold pb-1 text-xl">DAFTAR<br>PERPUSMER</h2>
            @if (count($errors) > 0)
                <div class="bg-white rounded-md p-3 mb-2 border-red-100">
                    <ul class="text-sm text-red-700">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('registeraction')}}">
              @csrf
              <div class="form-group mb-6">
                <input type="text" class="form-control
                  block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
                  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:focus:border-green-700 focus:outline-none" 
                  id="nama" name="nama" placeholder="Nama">
              </div>
              <div class="form-group mb-6">
                <input type="password" class="form-control block
                  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded
                  transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-green-700 focus:outline-none" id="exampleInputPassword1"
                  name="password" placeholder="Password">
              </div>
              <div class="form-group mb-6">
                <input type="password" class="form-control block
                  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded
                  transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-green-700 focus:outline-none" id="exampleInputPassword1"
                  name="password_confirmation" placeholder="Ulangi Password">
              </div>
              <small class="block mb-5 text-xs text-gray-600 text-center">Sudah punya akun?<a href="{{route('login')}}"><span class="text-green-700 font-bold hover:text-green-400"> Masuk Disini!</span></a></small>
              <button type="submit" class="
                px-6 py-2.5 bg-green-700 text-white font-bold text-xs leading-tight uppercase rounded shadow-md w-full hover:bg-green-400 hover:shadow-lg
                focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg
                transition duration-150 ease-in-out">Daftar</button>
            </form>
          </div>
    </div>
</body>
</html>
