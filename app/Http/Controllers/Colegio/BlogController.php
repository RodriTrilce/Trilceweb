<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Meta;
use App\Events\PostViewed;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogController extends Controller
{
  protected $typePost;
  protected $site;

  public function __construct()
  {
    $this->typePost = 'blog';
    $this->site     = 'colegio';
  }

  public function index()
  {
    $posts = Post::where([
      ['type', '=', $this->typePost],
      ['visible', '=', '1'],
      ['approved', '=', '1'],
    ])
    ->orderBy('created_at', 'desc')
    ->paginate(10);

    $markers = Post::where([
      ['type', '=', $this->typePost],
      ['visible', '=', '1'],
      ['approved', '=', '1'],
      ['marker', '=', '1']
    ])
    ->orderBy('created_at', 'desc')
    ->take(4)
    ->get();

    Meta::set('title', 'Colegio Trilce | Blog: Un espacio para nuestras noticias');
    Meta::set('description', 'Un espacio para nuestras noticias');

    return view('/colegio/blog')->with([
                                        'posts'    => $posts,
                                        'markers'  => $markers,
                                        'site'     => $this->site
                                      ]);
  }

  public function post($post)
  {
    $post = Post::where('slug', $post)->firstOrFail();

    //\Event::fire(new PostViewed($post));
    if($post->approved) {
      //$post->visits()->increment();

      $related = Post::inRandomOrder()
      ->where([
        ['type', '=', $this->typePost],
        ['site', '=', $this->site],
        ['id', '<>', $post->id],
        ['visible', '1'],
        ['approved', '=', '1'],
      ])
      ->take(4)
      ->get();

      return view('/colegio/blog_post')->with([
        'post'      => $post,
        'related'   => $related
      ]);

    } else {
      return abort(404);
    }

  }
}













//
