<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PERPUSMER</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;800&display=swap" rel="stylesheet">
</head>
<body class="font-['Inter']">
    <header>
        <nav class="relative w-full flex flex-wrap items-center justify-between py-5 bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg">
            <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
                <div class="container-fluid">
                    <a class="text-xl text-green-700 font-bold">PERPUSMER</a>
                </div>
                @if ( session()->get('token') != NULL )
                <div class="container-fluid float-right inline-flex">
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
        </nav>
    </header>
    <div>
        @yield('content')
    </div>
</body>
</html>