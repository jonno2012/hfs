<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Services\ArticleEventService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function __construct(
        private readonly ArticleEventService $eventService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $articles = Article::paginate(15);

        return response()->json([
            'data' => $articles->items(),
            'meta' => [
                'current_page' => $articles->currentPage(),
                'last_page' => $articles->lastPage(),
                'per_page' => $articles->perPage(),
                'total' => $articles->total(),
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request): JsonResponse
    {
        $article = DB::transaction(function () use ($request) {
            $article = Article::create($request->validated());
            $this->eventService->publishCreated($article);

            return $article;
        });

        return response()->json([
            'data' => $article,
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $article = Article::findOrFail($id);

        return response()->json([
            'data' => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, string $id): JsonResponse
    {
        $article = DB::transaction(function () use ($request, $id) {
            $article = Article::findOrFail($id);
            $article->update($request->validated());
            $this->eventService->publishUpdated($article->fresh());

            return $article->fresh();
        });

        return response()->json([
            'data' => $article,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        DB::transaction(function () use ($id) {
            $article = Article::findOrFail($id);
            $articleId = $article->id;
            $article->delete();
            $this->eventService->publishDeleted($articleId);
        });

        return response()->noContent();
    }
}
