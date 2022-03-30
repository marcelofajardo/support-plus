<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Blog\DataTables\BlogPostDataTable;
use Modules\Blog\Http\Requests\BlogPostRequest;
use Modules\Blog\Repositories\BlogCategoryRepositoryInterface;
use Modules\Blog\Repositories\BlogPostRepositoryInterface;


class BlogPostController extends Controller
{
    protected $blogPostsRepository, $blogCategoriesRepository;

    public function __construct(BlogPostRepositoryInterface $blogPostsRepository, BlogCategoryRepositoryInterface $blogCategoriesRepository)
    {
        $this->blogPostsRepository = $blogPostsRepository;
        $this->blogCategoriesRepository = $blogCategoriesRepository;

    }

    public function index(BlogPostDataTable $dataTable)
    {
        return $dataTable->render('blog::blog-post.index');
    }

    public function create()
    {
        $blogPost = $this->blogPostsRepository->newObject();
        $categories = $this->blogCategoriesRepository->allActive();
        return view('blog::blog-post.create', compact('blogPost', 'categories'));
    }

    public function store(BlogPostRequest $request)
    {
        $this->blogPostsRepository->store($request->validated());
        return redirect()->route('blog-posts.index')
            ->with('success', trans('common.Created successfully'));
    }


    public function show($id)
    {
        $blogPost = $this->blogPostsRepository->findById($id);

        return view('blog::blog-post.show', compact('blogPost'));
    }


    public function edit($id)
    {
        $blogPost = $this->blogPostsRepository->findById($id);
        $categories = $this->blogCategoriesRepository->allActive();
        return view('blog::blog-post.edit', compact('blogPost', 'categories'));
    }

    public function update(BlogPostRequest $request, $id)
    {
        $this->blogPostsRepository->update($id, $request->validated());
        return redirect()->route('blog-posts.index')
            ->with('success', trans('common.Updated successfully'));
    }


    public function destroy($id)
    {
        $this->blogPostsRepository->deleteById($id);
        return redirect()->route('blog-posts.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
