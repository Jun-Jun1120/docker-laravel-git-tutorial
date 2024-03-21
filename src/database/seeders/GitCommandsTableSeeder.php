<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitCommandsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('git_commands')->insert([
            [
                'command' => 'git version',
                'description' => 'Gitのバージョンを出力する。',
                'category' => '基本操作'
            ],
            [
                'command' => 'git clone {リポジトリのURL}',
                'description' => '対象リポジトリのデフォルトブランチをクローンする。',
                'category' => 'クローン'
            ],
            [
                'command' => 'git clone --depth {深さ} {リポジトリのURL}',
                'description' => '対象リポジトリのデフォルトブランチを指定したコミット数で切り詰めてクローンする。',
                'category' => 'クローン'
            ],
            [
                'command' => 'git clone -b {ブランチ名} {リポジトリのURL}',
                'description' => '対象リポジトリの対象ブランチをクローンする。',
                'category' => 'クローン'
            ],
            [
                'command' => 'git remote',
                'description' => 'リモートリポジトリの一覧を出力する。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git remote add {リモートリポジトリ名} {リポジトリのURL}',
                'description' => '対象リポジトリをローカルのリモートリポジトリに追加する。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git remote rename {旧リモートリポジトリ名} {新リモートリポジトリ名}',
                'description' => 'ローカルの対象リモートリポジトリをリネームする。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git remote remove {リモートリポジトリ名}',
                'description' => '対象リモートリポジトリをローカルから削除する。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git branch',
                'description' => 'ローカルブランチの一覧を出力する（チェックアウト中のブランチに * が付く）。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git branch -a',
                'description' => 'ローカルブランチとリモートブランチの一覧を出力する。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git branch {ブランチ名}',
                'description' => '対象ブランチを新規作成する（チェックアウトしない）。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git branch -d {ブランチ名}',
                'description' => '対象ブランチを削除する。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git branch -d -f {ブランチ名}',
                'description' => '対象ブランチを強制削除する。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git branch -D {ブランチ名}',
                'description' => '対象ブランチを強制削除する（git branch -d -f のエイリアス）。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git branch -m {旧ブランチ名} {新ブランチ名}',
                'description' => '対象ブランチをリネームする。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git checkout {ブランチ名}',
                'description' => '対象ブランチに切り替える。',
                'category' => 'チェックアウト'
            ],
            [
                'command' => 'git checkout -b {ブランチ名}',
                'description' => '対象ブランチを新規作成し、切り替える。',
                'category' => 'チェックアウト'
            ],
            [
                'command' => 'git checkout {ファイルパス}',
                'description' => 'ワークツリーにある対象ファイルの変更を取り消す。',
                'category' => 'チェックアウト'
            ],
            [
                'command' => 'git checkout .',
                'description' => 'ワークツリーにある全ファイルの変更を取り消す。',
                'category' => 'チェックアウト'
            ],
            [
                'command' => 'git switch {ブランチ名}',
                'description' => '対象ブランチに切り替える。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git switch -c {ブランチ名}',
                'description' => '対象ブランチを新規作成し、切り替える。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git switch --detach refs/tags/{タグ名}',
                'description' => '対象タグに切り替える。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git restore {ファイルパス}',
                'description' => 'ワークツリーにある対象ファイルの変更を取り消す。',
                'category' => '変更の取り消し'
            ],
            [
                'command' => 'git restore .',
                'description' => 'ワークツリーにある全ファイルの変更を取り消す。',
                'category' => '変更の取り消し'
            ],
            [
                'command' => 'git restore --source {コミットID} {ファイルパス}',
                'description' => '対象ファイルの変更を対象コミットに戻す。',
                'category' => '変更の取り消し'
            ],
            [
                'command' => 'git diff',
                'description' => 'ワークツリーにあるファイルの差分を出力する。',
                'category' => '差分の表示'
            ],
            [
                'command' => 'git diff --cached',
                'description' => 'インデックスにあるファイルの差分を出力する。',
                'category' => '差分の表示'
            ],
            [
                'command' => 'git status',
                'description' => '変更したファイルの一覧を出力する。',
                'category' => '状態の確認'
            ],
            [
                'command' => 'git status -s',
                'description' => 'git statusを短い形式で出力する。',
                'category' => '状態の確認'
            ],
            [
                'command' => 'git status -s -b',
                'description' => '短い形式でもブランチとトラッキングを出力する。',
                'category' => '状態の確認'
            ],
            [
                'command' => 'git add {ファイルパス1} {ファイルパス2}...',
                'description' => '対象ファイルをインデックス（コミット対象）に追加する。',
                'category' => 'ステージング'
            ],
            [
                'command' => 'git add -A',
                'description' => '変更した全ファイルをインデックスに追加する。',
                'category' => 'ステージング'
            ],
            [
                'command' => 'git add -p {ファイルパス}',
                'description' => '対象ファイルをハンク単位でインデックスに追加する。',
                'category' => 'ステージング'
            ],
            [
                'command' => 'git reset HEAD {ファイルパス}',
                'description' => 'ステージングにある対象ファイルをワークツリーに戻す（git add {ファイルパス} を取り消す）。',
                'category' => 'ステージングの取り消し'
            ],
            [
                'command' => 'git reset HEAD',
                'description' => 'ステージングにある全ファイルをワークツリーに戻す（git add -A を取り消す）。',
                'category' => 'ステージングの取り消し'
            ],
            [
                'command' => 'git commit',
                'description' => '指定したエディタでメッセージを書き、インデックスにある全ファイルをコミットする。',
                'category' => 'コミット'
            ],
            [
                'command' => 'git commit -m "{メッセージ}"',
                'description' => 'メッセージを付け、インデックスにある全ファイルをコミットする。',
                'category' => 'コミット'
            ],
            [
                'command' => 'git revert HEAD',
                'description' => '直前のコミットを元に戻すコミットを作成する。',
                'category' => 'コミットの取り消し'
            ],
            [
                'command' => 'git revert {コミットID}',
                'description' => '対象コミットを元に戻すコミットを作成する。',
                'category' => 'コミットの取り消し'
            ],
            [
                'command' => 'git push origin {ローカルブランチ名}',
                'description' => '対象ローカルブランチをoriginにプッシュする。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git push -d origin {リモートブランチ名}',
                'description' => '対象リモートブランチをoriginから削除する。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git push origin {タグ名}',
                'description' => '対象タグをoriginにプッシュする。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git push -d origin {タグ名}',
                'description' => '対象タグをoriginから削除する。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git push -f',
                'description' => '強制プッシュする。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git push --force-with-lease',
                'description' => '強制プッシュする（ブランチのアップストリームが変更されている場合などは拒否する）。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git fetch origin',
                'description' => 'originから最新の履歴を取得する。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git fetch --prune origin',
                'description' => 'リモートリポジトリ上に存在しなくなったブランチなどの参照を削除し、originから最新の履歴を取得する。',
                'category' => 'リモート操作'
            ],
            [
                'command' => 'git rebase origin/{ブランチ名}',
                'description' => 'originにある対象ブランチを、チェックアウト中のブランチへリベースする。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git rebase --continue',
                'description' => 'リベースを続ける。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git rebase --quit',
                'description' => 'リベースを中止する。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git rebase --abort',
                'description' => 'リベースを強制終了する。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git merge origin/{ブランチ名}',
                'description' => 'originにある対象ブランチを、チェックアウト中のブランチへマージする。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git merge --squash origin/{ブランチ名}',
                'description' => 'originにある対象ブランチのコミットをひとつにまとめ、チェックアウト中のブランチへマージする。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git cherry-pick {コミットID}',
                'description' => '対象コミットをチェリーピックする。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git cherry-pick {始点の1つ前のコミットID}..{終点のコミットID}',
                'description' => '始点から終点までのコミットをチェリーピックする。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git cherry-pick --skip',
                'description' => '現在のコミットをスキップして、残りのシーケンスを続ける。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git cherry-pick --quit',
                'description' => '失敗したチェリーピックを取り消す。',
                'category' => 'ブランチ操作'
            ],
            [
                'command' => 'git stash list',
                'description' => 'スタッシュの一覧を出力する。',
                'category' => 'スタッシュ操作'
            ],
            [
                'command' => 'git stash show',
                'description' => 'スタッシュの変更を出力する。',
                'category' => 'スタッシュ操作'
            ],
            [
                'command' => 'git stash push -m "{メッセージ}"',
                'description' => 'メッセージを付け、変更をスタッシュにプッシュする。',
                'category' => 'スタッシュ操作'
            ],
            [
                'command' => 'git stash pop',
                'description' => 'スタッシュの変更をワークツリーに戻す（スタッシュから消える）。',
                'category' => 'スタッシュ操作'
            ],
            [
                'command' => 'git stash apply',
                'description' => 'スタッシュの変更をワークツリーに戻す（スタッシュから消えない）。',
                'category' => 'スタッシュ操作'
            ],
            [
                'command' => 'git stash drop',
                'description' => 'スタッシュから変更を削除する。',
                'category' => 'スタッシュ操作'
            ],
            [
                'command' => 'git log',
                'description' => 'ログを出力する。',
                'category' => '履歴の確認'
            ],
            [
                'command' => 'git blame {ファイルパス}',
                'description' => '対象ファイル全体の各行ごとに、最後に編集したリビジョンと作者を表示する。',
                'category' => 'コードの調査'
            ],
            [
                'command' => 'git blame -L {開始行},{終了行} {ファイルパス}',
                'description' => '対象ファイルの開始行から終了行までを各行ごとに、最後に編集したリビジョンと作者を表示する。',
                'category' => 'コードの調査'
            ],
            [
                'command' => 'git show {コミットID}',
                'description' => '対象コミットのメッセージとテキストの差分を表示する。',
                'category' => 'コミットの調査'
            ],
            [
                'command' => 'git tag {タグ名}',
                'description' => 'タグを付ける。',
                'category' => 'タグ操作'
            ],
            [
                'command' => 'git tag -d {タグ名}',
                'description' => 'タグを削除する。',
                'category' => 'タグ操作'
            ],
            [
                'command' => 'git rm {ファイルパス}',
                'description' => '対象ファイルを削除し、Gitの管理外にする。',
                'category' => 'ファイル操作'
            ],
            [
                'command' => 'git rm --cached {ファイルパス}',
                'description' => '対象ファイルを削除せず、Gitの管理外にする。',
                'category' => 'ファイル操作'
            ],
            [
                'command' => 'git rm -r {フォルダパス}',
                'description' => '対象フォルダ以下を全削除し、Gitの管理外にする。',
                'category' => 'ファイル操作'
            ]
        ]);
    }
}
