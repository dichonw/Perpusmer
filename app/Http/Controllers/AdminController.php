<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Member;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        
        if (Session::has('token')) {
            $users = Users::where('token', Session::get('token'))->first();
            $total_buku = Book::count();
            $total_user = Users::count();
            $total_member = Member::count();
            return view('home', [
                'users' => $users,
                'total_buku'=> $total_buku,
                'total_user'=> $total_user,
                'total_member'=> $total_member
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function user(){
        $datauser = Users::all();
        return view('admin/user/user-data', ['user'=> $datauser]);
    }

    public function member(){
        $datamember = Member::all();
        return view('admin/member/member-data', ['member'=> $datamember]);
    }

    public function buku(){
        $databuku = Book::all();
        return view('admin/book/book-data', ['buku'=> $databuku]);
    }

    public function tambahuser(){
        return view('admin/user/user-data-add');
    }

    public function tambahmember(){
        return view('admin/member/member-data-add');
    }

    public function tambahbuku(){
        return view('admin/book/book-data-add');
    }

    public function detailmember($id){
        $memberdetail = Member::where('MemberID', $id)->first();
        return view('admin/member/member-data-detail', [
            'member' => $memberdetail
        ]);
    }

    public function detailbuku($id){
        $bukudetail = Book::where('ID', $id)->first();
        return view('admin/book/book-data-detail', [
            'buku' => $bukudetail
        ]);
    }

    public function addmember(Request $request){
        Member::create([
            'Name' => $request->nama,
            'Address' => $request->alamat,
            'Phone' => $request->no_tlp,
            'HP' => $request->no_hp,
            'Date' => now(),
            'MaxLoan' => $request->maks_pinjam,
        ]);
        return redirect()->route('member');
    }

    public function addbuku(Request $request){
        Book::create([
            'Title' => $request->judul,
            'Author' => $request->pengarang,
            'Publisher' => $request->penerbit,
            'Category' => $request->kategori,
            'Year' => $request->tahun,
            'AllowingToLoan' => $request->boleh_pinjam,
            'DaysToLoan' => $request->pinjam_hari,
            'Status' => $request->status,
            'Type' => $request->tipe,
            'Condition' => $request->kondisi,
        ]);
        return redirect()->route('buku');
    }

    public function editmember($id)
    {
        $memberedit = Member::where('MemberID', $id)->first();
        return view('admin/member/member-data-edit', [
            'member' => $memberedit
        ]);
    }

    public function updatemember(Request $request)
    {
        Member::where('MemberID', $request->MemberID)->update([
            "Name" => $request->nama,
            "Address" => $request->alamat,
            "Phone" => $request->no_tlp,
            "HP" => $request->no_hp,
            "MaxLoan" => $request->maks_pinjam,
        ]);
        return redirect()->route('member');
        
    }

    public function deletemember(Request $request)
    {
        Member::where('MemberID', $request->MemberID)->delete();
        return redirect()->back();
    }

    public function deletebuku(Request $request)
    {
        Book::where('ID', $request->ID)->delete();
        return redirect()->back();
    }

    public function deleteuser(Request $request)
    {
        Users::where('UserID', $request->UserID)->delete();
        return redirect()->back();
    }

    public function edituser($id)
    {
        $useredit = Users::where('UserID', $id)->first();
        return view('admin/user/user-data-edit', [
            'user' => $useredit
        ]);
    }

    public function updateuser(Request $request)
    {
        Users::where('UserID', $request->UserID)->update([
            "Name" => $request->nama,
            "Password" => $request->password,
            "Status" => $request->status,
        ]);
        return redirect()->route('user');
        
    }

    public function adduser(Request $request){
        Users::create([
            'Name' => $request->nama,
            'Password' => $request->password,
            'Status' => $request->status,
        ]);
        return redirect()->route('user');
    }

    public function editbuku($id)
    {
        $bukuedit = Book::where('ID', $id)->first();
        return view('admin/book/book-data-edit', [
            'buku' => $bukuedit
        ]);
    }

    public function updatebuku(Request $request)
    {
        Book::where('ID', $request->ID)->update([
            'Title' => $request->judul,
            'Author' => $request->pengarang,
            'Publisher' => $request->penerbit,
            'Category' => $request->kategori,
            'Year' => $request->tahun,
            'AllowingToLoan' => $request->boleh_pinjam,
            'DaysToLoan' => $request->pinjam_hari,
            'Status' => $request->status,
            'Type' => $request->tipe,
            'Condition' => $request->kondisi,
        ]);
        return redirect()->route('buku');
        
    }
}
