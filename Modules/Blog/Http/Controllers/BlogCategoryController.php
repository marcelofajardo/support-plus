<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Blog\DataTables\BlogCategoryDataTable;
use Modules\Blog\Http\Requests\BlogCategoryRequest;
use Modules\Blog\Models\BlogCategory;
use Modules\Blog\Repositories\BlogCategoryRepositoryInterface;


class BlogCategoryController extends Controller
{
    protected $blogCategoriesRepository;

    public function __construct(BlogCategoryRepositoryInterface $blogCategoriesRepository)
    {
        $this->blogCategoriesRepository = $blogCategoriesRepository;
    }

    public function index(BlogCategoryDataTable $dataTable)
    {
        return $dataTable->render('blog::blog-category.index');
    }

    public function create()
    {
        $blogCategory = new BlogCategory();
        return view('blog::blog-category.create', compact('blogCategory'));
    }

    public function store(BlogCategoryRequest $request)
    {
        $this->blogCategoriesRepository->store($request->validated());
        return redirect(route('blog-categories.index'))
            ->with('success', trans('common.Created successfully'));
    }

    public function edit($id)
    {
        $blogCategory = $this->blogCategoriesRepository->findById($id);

        return view('blog::blog-category.edit', compact('blogCategory'));
    }

    public function update(BlogCategoryRequest $request, $id)
    {
        $this->blogCategoriesRepository->update($id, $request->validated());
        return redirect(route('blog-categories.index'))
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->blogCategoriesRepository->deleteById($id);
        return redirect(route('blog-categories.index'))
            ->with('success', trans('common.Deleted successfully'));
    }
}
