<?php

namespace App\Http\Controllers;

use App\Models\ScrapingResult;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use Symfony\Component\DomCrawler\Crawler;

// Created By Alfian Wahyu

class ScrapingController extends Controller {
    public function index () {
        return view ('scrapping.form');
    }

    public function scrape(Request $request) {
        $url = $request->input('url');

        // Buat instance untuk client
        $client = new GuzzleHttpClient();

        // Akses halaman web
        $response = $client->get($url);
        $content = $response->getBody()->getContents();

        // Buat Instance Crawler
        $crawler = new Crawler($content);

        // Mengambil informasi creator, date, dan title
        $creators = [];
        $creatorElements = $crawler->filter('author');
        if ($creatorElements->count() > 0) {
            $creators = $creatorElements->each(function ($node) {
                return $node->text();
            });
        }
    
        $date = '';
        $dateElement = $crawler->filter('date');
        if ($dateElement->count() > 0) {
            $date = $dateElement->text();
        }
    
        $title = '';
        $titleElement = $crawler->filter('title');
        if ($titleElement->count() > 0) {
            $title = $titleElement->text();
        }

        // Mengambil tahun dari string tanggal
        $year = substr($date, 0, 4);

        // Menyimpan hasil result di database
        $scrapingResult = new ScrapingResult();
        $scrapingResult->title = $title;
        $creatorsString = implode(", ", $creators);
        $scrapingResult->creator = $creatorsString;
        $scrapingResult->year = $year;
        $scrapingResult->save();


        // Tampilkan hasil scrapping
        return view('scraping.result', compact('creators', 'date', 'title'));
    }
}   
