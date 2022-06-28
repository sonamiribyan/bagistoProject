<?php

namespace ACME\item\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Http;
class itemController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');

        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {   
        // create the Google client
// $client = new Google\Client();

// /**
//  * Set your method for authentication. Depending on the API, This could be
//  * directly with an access token, API key, or (recommended) using
//  * Application Default Credentials.
//  */
// $client->useApplicationDefaultCredentials();
// $client->addScope(Google\Service\Plus::PLUS_ME);

// // returns a Guzzle HTTP Client
// $httpClient = $client->authorize();

// // make an HTTP request
// $response = $httpClient->get('https://www.googleapis.com/plus/v1/people/me');
// dd($response);
$response = Http::get('https://pagespeedonline.googleapis.com/pagespeedonline/v5/runPagespeed?url=https://developers.google.com');
$responseSpeed=$response['loadingExperience'];
        return view($this->_config['view'],[
            'data'=>$responseSpeed,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view($this->_config['view']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        return view($this->_config['view']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
