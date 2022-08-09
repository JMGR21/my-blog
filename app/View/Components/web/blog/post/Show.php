<?php

namespace App\View\Components\web\blog\post;

use Illuminate\View\Component;
use App\Models\Post;

class Show extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $post;
    public $posts;

    public function __construct($post)
    {
        $this->post = $post;

        $this->posts = Post::all()
                    ->where('category_id', '=', $post->category->id)
                    ->where('id', '!=', $post->id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.blog.post.show');
    }
}
