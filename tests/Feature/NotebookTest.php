<?php

namespace Tests\Feature;

use App\Models\NoteBook;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class NotebookTest extends TestCase
{
    use RefreshDatabase;

    public function testNotebookStoreWithFullBody()
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

    public function testNotebookStoreWithRequiredData()
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

    public function testNotebookStoreWithNullData()
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

    public function testFailedNotebookStoreWithOutRequiredData()
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

    public function testNotebookUpdateWithFullData()
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

}
