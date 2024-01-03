<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() : string {
        return "Страница списка постов";
    }

    public function create() : array {
        return [
					"status" => 200,
	        "message" => "Данные получены"
        ];
    }

    public function store() : string {
        return "Запрос создания поста";
    }

    public function show(string|int $code) : \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory {
        return view("post", ["code" => $code, "key" => config('app.locale', 'en')]);
    }

    public function edit($post) : array {
        return [
            "status" => 200,
	          "message" => "edit {$post}",
        ];
    }

    public function update() : string {
        return "Обновление поста";
    }

    public function delete() : string {
        return "Удаление поста";
    }

    // public function like() : string {
    //     return "Лайк поста";
    // }
}
