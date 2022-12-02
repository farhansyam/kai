<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use Carbon\Carbon;
class UserControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(User $id)
    {
        $forums = Post::all();
        $ids = $id->id;
        $users = User::whereId($ids)->first();
        return view('profile',compact('forums','ids','users'));
    }

    public function index()
    {
        $users = User::all();
        $userss = User::selectRaw('DATE(created_at) as x, COUNT(*) as y')
    ->groupBy('x')->get();
        foreach($userss as $user)
            $date[] = $user['x'];
            // $formattedDates = array_map(function($time) { return date("Y:m:d", $time); }, $date);
        foreach($userss as $u)
            $nama[] = $u['y'];
        
        // dd($dates);
        return view('userlist',compact('users','date','nama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function destroy(User $user)
    {
        $user->delete();
        return redirect('users');
    }

    public function downloadPDF()
    {
        $users = User::all();

        $pdf = PDF::loadView('pdf.usersdetails', array('users' =>  $users))
        ->setPaper('a4', 'portrait');

        return $pdf->download('users-details.pdf');   
    }

    public function export() 
            {
            return Excel::download(new UsersExport, 'users.xlsx');
            }
}
