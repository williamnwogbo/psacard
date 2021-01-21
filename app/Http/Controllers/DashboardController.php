<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function submit_data(){
        return view('admin.submit_data');
    }


    public function post_submit_data(Request $request){
        $this->validate($request,[
            'link' => "required"
        ]);


        $client = new Client();

        $crawler = $client->request('GET', $request->link);

        //this function determines what happens
        //1. Insert into the collections
        //2. Tie the an item to a collection
        //3. Setup a cronjob for scraping or getting the data from the URL

        $crawler->filter('.item__title')->each(function ($node) {
            print $node->text()."\n";
        });

    }
}
