<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home()
    {
        echo "
        <h1>This is home page</h1>
        ";
    }

    function product()
    {
        echo "
        <ul>
            <li><a href='https://www.educastudio.com/category/marbel-edu-games'>Product 1</a></li>
            <li><a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>Product 2</a></li>
            <li><a href='https://www.educastudio.com/category/riri-story-books'>Product 3</a></li>
            <li><a href='https://www.educastudio.com/category/kolak-kids-songs'>Product 4</a></li>
        </ul>
        ";
    }

    function news($page)
    {
        return "This is news page number " . $page;
    }

    function program()
    {
        echo "
        <ul>
            <li><a href='https://www.educastudio.com/program/karir'>Program 1</a></li>
            <li><a href='https://www.educastudio.com/program/magang'>Program 2</a></li>
            <li><a href='https://www.educastudio.com/program/kunjungan-industri'>Program 3</a></li>
        </ul>
        ";
    }

    function about()
    {
        return "This is about page";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "This is contact page<br>";
        echo "
        <form action='/contact' method='POST'>
            <input type='hidden' name='_token' value='02At9n6w6lzRgmIrXYYJaEvKD83has2Lexna5Ufr'>
            <input type='submit' value='Contact Us'>    
        </form>
        ";
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
        echo "<a href='https://www.educastudio.com/contact-us'>Contact Us</a>";
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
    public function destroy($id)
    {
        //
    }
}
