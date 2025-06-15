namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    public function index()
    {
        return view('edukasi'); // cari file resources/views/edukasi.blade.php
    }
}
