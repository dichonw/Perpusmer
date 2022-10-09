<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
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
    <header class="flex-none w-[300px]">
        <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Open()">
            <i class="fa fa-bars px-2 py-2 bg-green-900 rounded-md"></i>
        </span>
        <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] p-2 w-[300px] 
            overflow-y-auto text-center bg-green-900">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center">
                    <i class="fa fa-gear px-2 py-2 bg-green-600 rounded-md"></i>
                    <h1 class="font-bold text-gray-200 text-xl ml-2">PERPUSMER</h1>
                    <i class="fa fa-x ml-20 cursor-pointer lg:hidden" onclick="Open()"></i>
                </div>
                <hr class="my-2 text-gray-600">
                <a href="{{url('/home')}}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 
                        duration-300 cursor-pointer hover:bg-green-600 text-white hover:font-bold">
                        <i class="fa fa-dashboard"></i>
                        <span class="ml-4 text-gray-200">Dashboard</span>
                    </div>
                </a>
                <a href="{{url('/user')}}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 
                        duration-300 cursor-pointer hover:bg-green-600 text-white hover:font-bold">
                        <i class="fa fa-user"></i>
                        <span class="ml-4 text-gray-200">User</span>
                    </div>
                </a>
                <a href="{{url('/member')}}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 
                        duration-300 cursor-pointer hover:bg-green-600 text-white hover:font-bold">
                        <i class="fa fa-users"></i>
                        <span class="ml-4 text-gray-200">Member</span>
                    </div>
                </a>
                <a href="{{url('/buku')}}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 
                        duration-300 cursor-pointer hover:bg-green-600 text-white hover:font-bold">
                        <i class="fa fa-book"></i>
                        <span class="ml-4 text-gray-200">Buku</span>
                    </div>
                </a>
            </div>
        </div> 
    </header>
    <div class="flex-auto">
        @yield('content')
    </div>
    <script type="text/javascript">
        function Open(){
            document.querySelector('.sidebar').classList.toggle('left-[-300px]');
        }
    </script>
</body>
</html>