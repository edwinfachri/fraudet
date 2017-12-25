<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class HomeController extends Controller
{
    public function index() {
      return view('index');
    }

    public function crawling() {
      $text = "";
      $list = ['http://caen-keepexploring.canada.travel', 'https://wikitravel.org/en/Canada',
               'https://www.cia.gov/library/publications/the-world-factbook/geos/ca.html'];
      foreach ($list as $k=>$v) {
        $client = new Client();
        $crawler = $client->request('GET', $v);
        $text .= $crawler->filterXPath('//body')->text();
      }
      $text = str_replace('Niagara', '', $text);
      dd($text);
    }

    public function lkcrawling(Request $request) {
      $link = strpos($request->link, 'https') !== false? $request->link : 'https://'.$request->link;
      $client = new Client();
      $crawler = $client->request('GET', $request->link);
      $text = $crawler->filterXPath('//body')->text();
    }

    public function pcrawling() {
      $filename = "coba.py";
      $handle = popen("/Users/hznk/anaconda2/bin/python ".$filename, "r");
      $read = fread($handle, filesize($filename));
      pclose($handle);
      dd($read);
    }
}
