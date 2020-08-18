<?php

namespace Jobferrari\Gomamay\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GoMamayMainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
