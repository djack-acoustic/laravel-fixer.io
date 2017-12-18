<?php
/**
 * Created by PhpStorm.
 * User: Zakka Musaddid
 * Date: 18/12/2017
 * Time: 07.00
 */

namespace Zakka\Rate;


use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class RateController extends Controller
{
    protected $guzzle;
    public function __construct(Client $client)
    {
        $this->guzzle = $client;
    }

    public function index($from, $to){
        $request = $this->guzzle->request("GET", "http://api.fixer.io/latest?base=".$from);
        $data = json_decode($request->getBody());
        echo "Rate untuk 1 $from ke $to adalah ".$data->rates->$to;
    }
}