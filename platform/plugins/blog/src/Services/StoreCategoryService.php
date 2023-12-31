<?php

namespace Botble\Blog\Services;

use Botble\Blog\Models\Post;
use Botble\Blog\Services\Abstracts\StoreCategoryServiceAbstract;
use Illuminate\Http\Request;

class StoreCategoryService extends StoreCategoryServiceAbstract
{
    public function execute(Request $request, Post $post): void
    {
        $post->categories()->sync($request->input('categories', []));
    }
}
