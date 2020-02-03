<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Jobs\SendEmail;
use Carbon\Carbon;

class TransController extends Controller
{
    /**
     * Store a new podcast.
     *
     * @param  Request  $request
     * @return Response
     */
    public function setTrans(Request $request)
    {
        // Create podcast...

        $details['email'] = 'ferrysanjaya99@gmail.com';
        SendEmail::dispatch($details)->delay(Carbon::now()->addSeconds(5));
    
        dd('Berhasil');
    }
}

?>