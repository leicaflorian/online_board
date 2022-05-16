<?php

namespace App\Http\Controllers;

use App\Models\Congregation;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
  }
  
  /**
   * Show the application dashboard.
   *
   * @return Renderable
   */
  public function index() {
    /**
     * @var User $user
     */
    $user = Auth::user();
    
    if ($user) {
      $congregations = $user->congregations;
    }
    
    
    return view('home', [
      "congregations" => $congregations ?? null
    ]);
  }
}
