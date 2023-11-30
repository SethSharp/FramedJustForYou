<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Domain\Categories\Models\Category;
use App\Domain\Files\Actions\StoreFileAction;
use App\Http\Requests\Categories\StoreCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;

class UpdateCategoryController extends Controller
{
    public function __invoke(
        UpdateCategoryRequest $request,
        Category              $category,
        StoreFileAction       $storeFileAction
    ) {
        $category->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if ($request->file('file')) {
            $file = $storeFileAction($request->file('file'));

            $category->update([
                'file_id' => $file->id
            ]);
        }

        return redirect()->back()->with('success', 'Successfully updated category!');
    }
}
