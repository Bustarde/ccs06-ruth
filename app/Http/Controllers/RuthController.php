<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuthController extends Controller
{
    const BOOK = 'The Book of Ruth';
    const BIBLE = 'King James Version';
    const CHAPTERS = 4;

    public function index()
    {
        return view('index', [
            'name_of_book' => static::BOOK,
            'version_of_bible' => static::BIBLE,
            'number_of_chapters' => static::CHAPTERS
        ]);
    }

    public function displayChapter($chapter_number)
    {
        return view('read-chapter', [
            'name_of_book' => static::BOOK,
            'version_of_bible' => static::BIBLE,
            'number_of_chapters' => static::CHAPTERS,
            'chapter_number' => $chapter_number
        ]); 
    }

    public function displayAllChapters()
    {
        return view('all-chapters', [
            'name_of_book' => static::BOOK,
            'version_of_bible' => static::BIBLE,
            'number_of_chapters' => static::CHAPTERS
        ]);
    }
}