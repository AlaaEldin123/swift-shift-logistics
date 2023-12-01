<?php

namespace Theme\Transp\Http\Controllers;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Blog\Models\Category;
use Botble\Theme\Facades\Theme;
use Botble\Theme\Http\Controllers\PublicController;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;

class TranspController extends PublicController
{
    public function ajaxGetPostByCategory(int|string $categoryId, BaseHttpResponse $response, Request $request)
    {
        if (! $request->ajax()) {
            abort(404);
        }

        $category = Category::query()
            ->whereKey($categoryId)
            ->wherePublished()
            ->first();

        if (! $category) {
            abort(404);
        }

        $posts = $category->loadMissing(['posts' => function (BelongsToMany $query) {
            $query->wherePublished();
        }])->posts;

        return $response->setData(Theme::partial('blog.posts', compact('posts')));
    }
}
