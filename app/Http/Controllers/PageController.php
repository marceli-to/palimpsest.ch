<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home(Request $request)
  {
    return view('pages.home');
  }

  public function about(Request $request)
  {
    return view('pages.about');
  }

  public function places(Request $request)
  {
    return view('pages.places');
  }

  public function place(Request $request, $place)
  {
    return view('pages.places.' . $place);
  }

  public function imageGallery(Request $request)
  {
    return view('pages.image-gallery');
  }

  public function imprint(Request $request)
  {
    return view('pages.imprint');
  }

  public function privacy(Request $request)
  {
    return view('pages.privacy');
  }
}