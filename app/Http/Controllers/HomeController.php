<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function gallery()
    {
        $title = "Galer&iacute;a";
        $page = "galery";

        $albums = Album::all();

        return view('galery', compact('title', 'page', 'albums'));
    }

    public function menu()
    {
        $title = "Men&uacute;";
        $page = "menu";

        $categories = Category::all();

        return view('menu', compact('title', 'page', 'categories'));
    }

    public function category(Category $category)
    {
        $title = "Men&uacute;";
        $page = "menu";

        $items = Item::all();

        return view('group', compact('title', 'page', 'category', 'items'));
    }

    public function mail(Request $request)
    {
      //guarda el valor de los campos enviados desde el form en un array
      $data = $request->all();

      //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
      \Mail::send('emails.message', $data, function($message) use ($request)
      {
          //remitente
          $message->from($request->email, $request->name);

          //asunto
          $message->subject('Mensaje recibido desde la pagina web');

          //receptor
          $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));

      });

      return redirect('/');
    }
}
