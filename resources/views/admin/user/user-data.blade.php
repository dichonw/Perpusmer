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
    <h2 class="text-slate-700 font-bold p-4 ml-2 mt-4 text-3xl">Data User</h2>
    <a href="{{url('/tambahuser')}}" class="p-2 ml-5 mb-5 bg-green-900 rounded-md text-white
    cursor-pointer hover:bg-green-600">Tambah User</a>
    <div class="p-5">
        <div class="flex flex-col">
            <div class="overflow-hidden">
                <table class="min-w-full ">
                    <thead class="bg-slate-400 border-b font-bold">
                        <tr>
                        <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                            UserID
                        </th>
                        <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                            Nama
                        </th>
                        <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                            Status
                        </th>
                        <th scope="col" class="text-sm text-gray-900 px-6 py-4 text-left">
                            Action
                        </th>
                        </tr>
                    </thead>@foreach ($user as $u)
                    <tbody>
                        <tr class="bg-slate-200 border-b transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$u->UserID}}</td>
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                {{$u->Name}}
                            </td>
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                @if ($u->Status == 1)
                                    <h2 class="font-bold">Admin</h2>
                                @else
                                    <h2 class="font-bold">User</h2>
                                @endif
                            </td>
                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                <a href="{{route('edituser', $u->UserID)}}"><i class="fa fa-edit px-2 py-2 bg-blue-700 rounded-md text-white
                                cursor-pointer hover:bg-blue-400"></i></a>
                                <form method="POST" action={{ route('deleteuser') }}>
                                    @csrf
                                    <input type="hidden" name="UserID" value={{ $u->UserID }} />
                                    <button type="submit"><i class="fa fa-trash px-2 py-2 bg-red-700 rounded-md text-white
                                        cursor-pointer hover:bg-red-400"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection


