<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\FinancialTag;

class DashboardController extends Controller
{
	protected $user;
	protected $ft;

	public function __construct(User $user, FinancialTag $ft)
	{
		$this->user = $user;
		$this->ft = $ft;
	}

    public function index()
    {
    	dd($this->ft->get());
    	// return view('dashboard.index');
    }
}
