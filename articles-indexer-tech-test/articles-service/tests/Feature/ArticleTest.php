<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test creating an article.
     */
    public function test_can_create_article(): void
    {
        $data = [
            'title' => 'Test Article',
            'body' => 'This is a test article body.',
            'status' => 'draft',
        ];

        $response = $this->postJson('/api/articles', $data);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'title',
                    'body',
                    'status',
                    'created_at',
                    'updated_at',
                ],
            ])
            ->assertJson([
                'data' => [
                    'title' => $data['title'],
                    'body' => $data['body'],
                    'status' => $data['status'],
                ],
            ]);

        $this->assertDatabaseHas('articles', [
            'title' => $data['title'],
            'body' => $data['body'],
            'status' => $data['status'],
        ]);
    }

    /**
     * Test updating an article.
     */
    public function test_can_update_article(): void
    {
        $article = Article::create([
            'title' => 'Original Title',
            'body' => 'Original body',
            'status' => 'draft',
        ]);

        $updateData = [
            'title' => 'Updated Title',
            'body' => 'Updated body',
            'status' => 'published',
        ];

        $response = $this->putJson("/api/articles/{$article->id}", $updateData);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'title',
                    'body',
                    'status',
                    'created_at',
                    'updated_at',
                ],
            ])
            ->assertJson([
                'data' => [
                    'id' => $article->id,
                    'title' => $updateData['title'],
                    'body' => $updateData['body'],
                    'status' => $updateData['status'],
                ],
            ]);

        $this->assertDatabaseHas('articles', [
            'id' => $article->id,
            'title' => $updateData['title'],
            'body' => $updateData['body'],
            'status' => $updateData['status'],
        ]);
    }

    /**
     * Test deleting an article.
     */
    public function test_can_delete_article(): void
    {
        $article = Article::create([
            'title' => 'Article to Delete',
            'body' => 'This article will be deleted',
            'status' => 'draft',
        ]);

        $response = $this->deleteJson("/api/articles/{$article->id}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('articles', [
            'id' => $article->id,
        ]);
    }

    /**
     * Test validation on create.
     */
    public function test_create_article_requires_title_and_body(): void
    {
        $response = $this->postJson('/api/articles', []);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['title', 'body']);
    }

    /**
     * Test validation on update.
     */
    public function test_update_article_requires_title_and_body(): void
    {
        $article = Article::create([
            'title' => 'Test Article',
            'body' => 'Test body',
            'status' => 'draft',
        ]);

        $response = $this->putJson("/api/articles/{$article->id}", []);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['title', 'body']);
    }

    /**
     * Test status validation.
     */
    public function test_status_must_be_draft_or_published(): void
    {
        $response = $this->postJson('/api/articles', [
            'title' => 'Test Article',
            'body' => 'Test body',
            'status' => 'invalid',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['status']);
    }
}
