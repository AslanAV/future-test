<?php

namespace Tests\Feature;

use App\Models\NoteBook;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class NotebookTest extends TestCase
{
    use RefreshDatabase;

    public function test_notebook_store_with_full_body()
    {
        $this->assertDatabaseCount('note_books', 0);

        $route = route('notebook.store');
        $body = [
            'family_name_first_name_patronymic' => 'Ivanov Ivan Ivanich',
            'phone' => '123456789',
            'email' => 'ivan@ivanov.ru',
            'company' => 'home',
            'birthday' => 1660338149,
            'photo' => 'https://ya.ru/ivanov.png'
        ];
        $response = $this->json('POST', $route, $body);

        $response->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseCount('note_books', 1);
    }

    public function test_notebook_store_with_only_required_data()
    {
        $this->assertDatabaseCount('note_books', 0);

        $route = route('notebook.store');
        $body = [
            'family_name_first_name_patronymic' => 'Ivanov Ivan Ivanich',
            'phone' => '123456789',
            'email' => 'ivan@ivanov.ru',
        ];
        $response = $this->json('POST', $route, $body);

        $response->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseCount('note_books', 1);
    }

    public function test_notebook_store_with_null_not_require_data()
    {
        $this->assertDatabaseCount('note_books', 0);

        $route = route('notebook.store');
        $body = [
            'family_name_first_name_patronymic' => 'Ivanov Ivan Ivanich',
            'phone' => '123456789',
            'email' => 'ivan@ivanov.ru',
            'company' => null,
            'birthday' => null,
            'photo' => null
        ];
        $response = $this->json('POST', $route, $body);

        $response->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseCount('note_books', 1);
    }

    public function test_failed_notebook_store_with_out_required_data()
    {
        $this->assertDatabaseCount('note_books', 0);

        $route = route('notebook.store');
        $body = [
            'family_name_first_name_patronymic' => 'Ivanov Ivan Ivanich',
            'phone' => null,
            'email' => null,
            'company' => null,
            'birthday' => null,
            'photo' => null
        ];
        $response = $this->json('POST', $route, $body);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

        $this->assertDatabaseCount('note_books', 0);
    }


    public function test_update_with_full_data()
    {

        $notebook = NoteBook::factory()->create();
        $id = $notebook->toArray()['id'];

        $route = route('notebook.update', ['notebook' => $id]);

        $body = [
            'family_name_first_name_patronymic' => 'Ivanov Ivan Ivanich',
            'phone' => 'new field',
            'email' => 'new field',
            'company' => 'new field',
            'birthday' => 1660338000,
            'photo' => 'new field',
        ];
        $response = $this->json('PUT', $route, $body);

        $response->assertStatus(Response::HTTP_OK);

        $this->assertDatabaseHas(
            'note_books',
            array_merge($body, ['id' => $id]),
        );
    }

    public function test_update_with_only_required_data()
    {

        $notebook = NoteBook::factory()->create();
        $id = $notebook->toArray()['id'];

        $route = route('notebook.update', ['notebook' => $id]);

        $body = [
            'family_name_first_name_patronymic' => 'Ivanov Ivan Ivanich',
            'phone' => 'new field',
            'email' => 'new field',
        ];
        $response = $this->json('PUT', $route, $body);

        $response->assertStatus(Response::HTTP_OK);

        $this->assertDatabaseHas(
            'note_books',
            array_merge($body, ['id' => $id]),
        );
    }

    public function test_destroy()
    {

        $notebook = NoteBook::factory()->create();
        $id = $notebook->toArray()['id'];

        $route = route('notebook.destroy', ['notebook' => $id]);

        $response = $this->json('DELETE', $route);

        $response->assertStatus(Response::HTTP_NO_CONTENT);

        $this->assertDatabaseMissing('note_books', [
            'id' => $id,
        ]);
    }

}
