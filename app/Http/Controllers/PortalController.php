<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Barang,Role,User};
class PortalController extends Controller {
 public function catalog(Request $r){$items=Barang::with('kategori')->when($r->filled('q'),fn($q)=>$q->where('nama_barang','like','%'.$r->input('q').'%'))->paginate(9)->withQueryString();return view('catalog',compact('items'));}
 public function login(Request $r){$data=$r->validate(['email'=>'required|email','password'=>'required']);if(!Auth::attempt($data+['status_akun'=>'aktif']))return back()->withErrors(['email'=>'Email atau kata sandi salah.'])->onlyInput('email');$r->session()->regenerate();return redirect()->route('dashboard');}
 public function register(Request $r){$data=$r->validate(['name'=>'required|max:100','email'=>'required|email|max:100|unique:users','password'=>'required|min:8|confirmed']);$data['role_id']=Role::where('nama','pegawai')->firstOrFail()->id;Auth::login(User::create($data));$r->session()->regenerate();return redirect()->route('dashboard');}
 public function logout(Request $r){Auth::logout();$r->session()->invalidate();$r->session()->regenerateToken();return redirect('/');}
 public function dashboard(){return view('dashboard',['total'=>Barang::count(),'stok'=>Barang::sum('stok')]);}
}
