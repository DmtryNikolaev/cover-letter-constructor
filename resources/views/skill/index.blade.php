@extends('layouts.app')

@section('content')
<h1>Список навыков</h1>

<div class="mb-2">
    <a href="{{ route('skill.create') }}" class="btn btn-info">Создать навык</a>
</div>

<div class="skills">
    @foreach ($skills as $skill)
    <div class="card p-2 skills__item">
        <h2>{{$skill->name}}</h2>
        <div class="skills__item-text">{{Str::limit($skill->body, 200)}}</div>
        <button class="skills__item-button btn btn-primary">Использовать</button>
    </div>
    @endforeach
</div>

<div class="form-floating mt-3">
    <textarea class="form-control cover-letter" placeholder="Leave a comment here" id="coverLetter"
        value="https://github.com/zenorocha/clipboard.js.git"></textarea>
    <label for="coverLetter">Сопроводительное письмо</label>
    <button class="btn" id="btn-to-copy" data-clipboard-target="#coverLetter">
        Скопировать в буфер
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard"
            viewBox="0 0 16 16">
            <path
                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
            <path
                d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
        </svg>
    </button>
</div>


@endsection