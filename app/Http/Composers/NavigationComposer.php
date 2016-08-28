<?php namespace App\Http\Composers;

use Illuminate\View\View;
use App\Article;

/**
 * Created by IntelliJ IDEA.
 * User: Achim
 * Date: 27.08.2016
 * Time: 22:58
 */
class NavigationComposer
{
    public function compose(View $view)
    {
        $view->with('latest', Article::latest()->first());
    }
}