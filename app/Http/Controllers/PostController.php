<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() : string {
        return "Страница списка постов";
    }

    public function create() : string {
        return "Страница создания поста";
    }

    public function store() : string {
        return "Запрос создания поста";
    }

    public function show(string|int $code) : string {
        return "Показать пост {$code}";
    }

    public function edit() : string {
        return "Изменение поста";
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
