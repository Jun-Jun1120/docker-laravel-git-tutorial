@extends('layouts.global')

@section('title', 'Gitチュートリアルサイトのトラブルシューティング')

@section('content')
    <div class="contents">
        <h1>こんなときどうすればいい？</h1>
        <hr>

        <h2>コミットメッセージを変えたい！</h2>
        <pre><code>git commit --amend</code></pre>
        <hr>

        <h2>コミットしちゃったけど元の状態に戻したい…</h2>
        <pre><code>直前のコミット操作を取り消す（addした直後の状態）

git reset --soft HEAD^

直前の2個のコミットを取り消す。

git reset --soft HEAD~2

git reset --hardはすべて取り消される。できる限り使わない。使うとしたらgit reflogとセット</code></pre>
        <hr>

        <h3>コミットまとめたいな<br>（一旦とかそういうコミットをしてしまってまとめたい）</h3>
        <p>① 4コミット分commitをまとめる</p>
        <pre><code>git rebase -i HEAD~4
git rebase -i HEAD~~~~</code></pre>
        <p>② テキストエディタ(たいていvim)が開きしかるべき対応をする（参考に詳しく書いてある）</p>
        <p>③ リモートリポジトリへpushする(コミットハッシュが変わるためforceプッシュする必要あり)</p>
        <pre><code>git push -f</code></pre>
        <p>参考　<a href="https://qiita.com/takke/items/3400b55becfd72769214">https://qiita.com/takke/items/3400b55becfd72769214</a></p>
        <hr>

        <h3>他のブランチのコミットを手元に持ってきたいとき<br>（Aブランチ、Bブランチでそれぞれの人が開発していて、<br>Bブランチのあるコミットだけ欲しい…）</h3>
        <p>AブランチにBブランチのコミットを取り込む（feature/aにcheckoutしている状態）</p>
        <pre><code>git fetch  // リモートブランチのコミットをとってくる時は必須
git log // BさんのコミットIDを探す。リモートに上がっているのであればgithubのコミット履歴などから探すでもOK
git cherry-pick 657150d</code></pre>
        <hr>

        <h3>あるコミットだけステージング環境に反映させたい、<br>先に反映させて動作確認をしたい</h3>
        <pre><code>git checkout feature/A
git log // 反映したいコミットIDを探す。リモートに上がっているのであればgithubのコミット履歴などから探すでもOK
git checkout develop
git pull origin develop
git checkout develop
git pull origin develop
git cherry-pick 657151d
git push origin develop

// ステージング環境にてgit pull origin developを実行して反映</code></pre>
        <hr>

        <h2>developからブランチ切って開発していたけど実はそれはhotfixで…</h2>
        <pre><code>// mainからブランチを切りなおして、今まで開発していたブランチからコミットをとってくる。

git checkout feature/F // developからきった作業ブランチ
git log  // mainから切り直したブランチに含めたいコミットIDを探す。
git checkout main
git pull origin main
git checkout -b hotfix/F
git cherry-pick 657152d // gitlogで特定したコミットID①
git cherry-pick 657153d // gitlogで特定したコミットID②
git cherry-pick 657154d // gitlogで特定したコミットID③</code></pre>
        <hr>

        <h2>違うブランチに対してgit pull、git pull —rebaseを実行してしまった</h2>
        <p>①コンフリクトした場合（コンフリクトの対応をやめればいい）</p>
        <pre><code># git pull場合
git merge --abort

# --rebaseの場合
git rebase --abort

# 勉強会用操作
git checkout feature/case-g
git pull origin develop-G //VScode上でも大丈夫
git merge --abort</code></pre>
        <p>②コンフリクトしなかった場合（git pullの場合。マージの操作を取り消す）</p>
        <pre><code># 勉強会用操作
git pull origin develop-G2

方法1
git reflog

321dd75 (origin/master, master) HEAD@{0}: merge: merging origin/master to master
321dd75 (origin/prod, prod)     HEAD@{1}: checkout: moving from temp to prod
eceee42 (origin/tmp, tmp)       HEAD@{2}: commit: fix the form bug.
321dd75 (origin/prod, prod)     HEAD@{3}: reset: moving to prod.
321dd75 (origin/prod, prod)     HEAD@{4}: checkout: moving from prod to temp

git reset --hard HEAD@{0}

方法2（マージコミットだけ削除）
git reset --hard HEAD^</code></pre>
        <p>③コンフリクトしなかった場合（git pull —rebaseの場合。rebaseの操作を取り消す）</p>
        <pre><code>git reflog

b745978 HEAD@{0}: rebase: that commit
4sd7c1c HEAD@{1}: rebase: this commit
adf3d3d HEAD@{2}: checkout: moving from main to feature1

git reset --hard HEAD@{2}</code></pre>
        <hr>

        <h2>リモートにまだプッシュしていない、開発中のブランチ消しちゃった</h2>
        <pre><code>// 復元したいbranchにcommitした操作を探す。
git reflog

4a4125a (HEAD -> master) HEAD@{0}: checkout: moving from branch1 to master
9d0bac1 (branch1) HEAD@{1}: commit: Create branch1.txt
4a4125a (HEAD -> master) HEAD@{2}: checkout: moving from master to branch1

// HEAD@{1}が復活させたいブランチの最後にコミットした操作
git branch branch1 HEAD@{1}</code></pre>
        <hr>

        <h3>他人のコミット消しちゃった<br>（同じブランチで複数人開発していて、相手がpushしているにもか関わらず自分がgit rebaseでまとめちゃってフォースプッシュしちゃったときなど）</h3>
        <p>全力で謝って消してしまったコミットをした人にもう一度上げてもらう。(このときforece pushしてもらう)</p>
        <pre><code>git reflog // rebaseをした操作を特定
git reset --hard HEAD@{git reflogで特定した戻したい地点の番号}
git push -f</code></pre>
        <hr>

        <h3>developをmainにマージしました。ただ、本番でエラーが起きました<br>(その後の対応の仕方)</h3>
        <p>①GitHub上でdevelop to mainのプルリクをリバートした場合</p>
        <pre><code>githubに入ってdevelop to mainのプルリクをリバートし、その後developを修正してプルリクを作るという手順でもプルリクは作れない

git revertでマージを取り消しした場合、マージ元のブランチを認識することができない

下記手順のようにrevertをrevertする必要がある。</code></pre>
        <pre><code>git checkout develop
git pull origin main // リモートのmainのリバートしたコミットの情報をとってくるため。
git log // リバートしたコミットの情報を取得
git revert コミットID -m 1 // 1の部分は状況による。https://qiita.com/bigplants/items/3d1d3ada97d0c86d2548
git push origin develop // ここまできてプルリクエストが作れるようになる。

※githubだとリバートしたプルリクをもとに戻すことが可能。</code></pre>
        <p>②masterブランチでresetして強制pushする方法</p>
        <pre><code>まずGithub上でリバートしていないのが前提。

こっちのほうが操作的には楽。

ただし、慎重に対応すること。</code></pre>
        <pre><code>git checkout master
git pull origin main
git reset --hard HEAD^
git push origin main -f</code></pre>
        <hr>

        <h2>参考記事</h2>
        <ul>
            <li><a href="https://qiita.com/d-dai/items/d7f329b7d82e2165dab3">カリキュラムのリポジトリ</a></li>
            <li><a href="https://qiita.com/chihiro/items/04813c707cc665de67c5">git aliasについて</a></li>
            <li><a href="https://qiita.com/reireias/items/d906ab086c3bc4c22147">zsh aliasについて</a></li>
            <li><a href="https://qiita.com/ymzkjpx/items/00ff664da60c37458aaa">gitのheadとは？</a></li>
            <li><a href="https://www.r-staffing.co.jp/engineer/entry/20191227_1">git reset —hardで消してしまったコミットを戻す方法</a></li>
        </ul>
    </div>
@endsection
