<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
class GitCommand extends Model
{
    /**
     * すべてのGitコマンドをカテゴリー別に取得
     *
     * @return Collection
     */
    public static function getAllCommands(): Collection
    {
        return self::all()->groupBy('category');
    }

    /**
     * Gitコマンドを検索
     *
     * @param string $search
     * @return Collection
     */
    public static function searchCommands(string $search): Collection
    {
        return self::query()
            ->where('command', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get()
            ->groupBy('category');
    }
}
