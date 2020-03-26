<?php 

namespace App\Exports;

// Only Data
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use App\User;

// Only Data
// class UsersExport implements FromCollection
// {
//     public function collection()
//     {
//         return User::all();
//     }
// }
// With View
class UsersExport implements FromView
{
    public function view(): View
    {
        return view('users.excel', [
            'users' => User::all()
        ]);
    }
}
