<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GitCommand;
use Illuminate\View\View;

class GitCommandController extends Controller
{
    /**
     * 全てのgitコマンドを表示
     *
     * @return View
     */
    public function index(): View
    {
        $categories = GitCommand::getAllCommands();
        return view('git-commands', compact('categories'));
    }

    /**
     * クエリに基づいてgitコマンドを検索
     *
     * @param Request $request
     * @return View
     */
    public function search(Request $request): View
    {
        $search = $request->input('search');
        $categories = GitCommand::searchCommands($search);
        return view('git-commands', compact('categories'));
    }
}
