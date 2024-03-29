@extends('layouts.global')

@section('title', 'Git入門')

@section('content')
    <div class="contents">
        <h1>基礎知識</h1>
        <hr>
        <h2>Gitとは？</h2>
        <p>Gitは、「ソースコードのバージョンを管理するツール」の名前。システム開発では複数の開発者によってソースコードが書き換わります。いつ誰がどこを変えたのか？ 最新のバージョンはどれか？ など、ソースコードのバージョンを把握する必要があります。このバージョン管理をするツールの1つが「Git」です。</p>
        <hr>
        <h2>Githubとは？</h2>
        <p>GitHubは、「Gitを利用した、開発者を支援するWebサービス」の名前です。GitHubは、クラウド上でGitを用いたバージョン管理をすることができ、さらにGitには無い、開発者に便利な機能を追加しています。<br>今やユーザ数は1000万人を超え、世界中のソフトウェア開発に利用されているサービスです。 GitHub のようなGitのホスティングサービスは、他にもBitbucketやBacklogなど複数存在しています。Gitを使うためには必ずGitHubを使わねば……というわけではありません。 Gitはツールの名前で、GitHubはWebサービスの名前。<br>この2つの関係は「メールとGmail」の関係に似ています。Gmailはメールを利用するためのWebサービスですし、メールのWebサービスはGmail以外にもYahoo!メールやHotmailなどがありますよね！</p>
        <hr>
        <h2>バージョン管理とは</h2>
        <p>バージョン管理とは、ソースコードを含む各種ファイルの改訂履歴を追跡し管理することです。この管理を行うプロセスを通じて、ファイルの新規追加や更新履歴を記録し、過去の状態を確認したり、特定の時点へファイルを復元することができます。<br>バージョン管理システムが存在しない場合、バグがいつ導入されたか特定できず、修正作業が遅れることや、バグの影響範囲が不明瞭になり、これがエンドユーザーの満足度の低下に繋がるリスクがあります。また、チーム開発の場においては、開発作業の同期が困難になり、効率が大きく低下する可能性があります。このため、ソフトウェア開発ではバージョン管理の理解と活用が不可欠となります。<br>また、Gitを用いたバージョン管理では、ファイルの変更履歴を「コミット」と呼ばれる単位で保存します。「結果をコミットする」という表現を聞いたことがあるかもしれませんが、これがそのコミットのことです。各コミットは一つの変更点を表し、前の状態への復元できる点を持っています。この構造により、時間を追って変更がどのように行われたかの流れを追跡することが可能になります。</p>
        <hr>
        <h2>ローカルリポジトリとリモートリポジトリについて</h2>
        <p><strong>ローカルリポジトリ</strong>: これはあなたのPC内に存在するリポジトリで、自分だけがアクセスできます。ここで作業のコミットや歴史の確認ができます。</p>
        <p><strong>リモートリポジトリ</strong>: これはインターネット上のサーバに存在するリポジトリで、多くの人がアクセスできます。ここに変更を公開し、他の人の変更を取り込むことができます。</p>
        <img src="/images/repository.png" alt="ローカルリポジトリとリモートリポジトリ" class="resize-image">
        <hr>
        <h2>Git用語</h2>
        <div class="git-terms">
            <div class="term">
                <h3>repository（リポジトリ）</h3>
                <p>履歴管理を行う場所。</p>
            </div>
            <div class="term">
                <h3>local repository（ローカルリポジトリ）</h3>
                <p>自分のパソコンの中に作られる保管場所（リポジトリ）です。</p>
            </div>
            <div class="term">
                <h3>remote repository（リモートリポジトリ）</h3>
                <p>自分以外の他のコンピュータの中にある、みんなで一緒に使う保管場所（リポジトリ）です。ネットワーク上に存在し、複数人でも管理ができるリポジトリ(GitHubなど)です。</p>
            </div>
            <div class="term">
                <h3>clone（クローン）</h3>
                <p>リモートリポジトリの内容を自分のローカル環境(自分のPC上)にコピーするコマンドです。</p>
            </div>
            <div class="term">
                <h3>fork（フォーク）</h3>
                <p>他の人のリモートリポジトリを自分のリモートリポジトリにコピーするコマンドです。</p>
            </div>
            <div class="term">
                <h3>init（イニット）</h3>
                <p>リポジトリを新規作成する時に使います。initコマンドを実行すると、現在のディレクトリまたは指定したディレクトリに「.git」というリポジトリを構成するディレクトリが作成されます。</p>
            </div>
            <div class="term">
                <h3>pull（プル）</h3>
                <p>リモートリポジトリの内容をローカルリポジトリに取り込むことができるコマンドです。データのダウンロードのようなものです。</p>
            </div>
            <div class="term">
                <h3>branch（ブランチ）</h3>
                <p>作業履歴を枝分かれさせて記録することができます。ひとつのプロジェクトから枝分かれをさせ、別の作業を行うことを「ブランチを切る」と言います。</p>
            </div>
            <div class="term">
                <h3>merge（マージ）</h3>
                <p>修正変更を加えたブランチを元のブランチに統合することができるコマンドです。</p>
            </div>
            <div class="term">
                <h3>reset（リセット）</h3>
                <p>コミットした内容を取り消すためのコマンドです。間違えてコミットしてしまった変更内容を取り消したい場合や、変更内容に誤りがあって取り消したい場合などによく使うコマンドです。</p>
            </div>
            <div class="term">
                <h3>revert（リバート）</h3>
                <p>既存のコミットを取り消すためのコマンドです。新しくコミットを追加しているだけなので、既存コミットの履歴が消えるわけではなく、コミットログには残っています。</p>
            </div>
            <div class="term">
                <h3>rebase（リベース）</h3>
                <p>指定したコミットをブランチを変えて作り直すことができます。また、コミットをひとまとめにしたり、ログを綺麗にすることができます。</p>
            </div>
            <div class="term">
                <h3>cherry-pick（チェリーピック）</h3>
                <p>他のブランチにあるコミットを自分が今いるブランチに反映させることができます。マージは全てのコミットが取り込まれますが、チェリーピックは選択したコミットのみを取り込むことができます。</p>
            </div>
            <div class="term">
                <h3>stash（スタッシュ）</h3>
                <p>作業中の変更を一時的に退避させることができます。作業中に他のブランチでの作業が必要になった時などに使います。</p>
            </div>
            <div class="term">
                <h3>conflict（コンフリクト）</h3>
                <p>複数人が同じファイルの同じ場所の変更をした時に起こるエラーのことです。 コンフリクトが起きたらどの変更を優先するか決めて直します。</p>
            </div>
            <div class="term">
                <h3>check out（チェックアウト）</h3>
                <p>今作業しているブランチから他の作業ブランチへ切り替えたい時に使用するコマンドです。</p>
            </div>
            <div class="term">
                <h3>fetch（フェッチ）</h3>
                <p>リモートリポジトリで更新された最新データをローカルリポジトリに取得するコマンドです。取得のみを行うので、マージが自動で行われないのがPullとの違いです。</p>
            </div>
            <div class="term">
                <h3>push（プッシュ）</h3>
                <p>ローカルリポジトリの修正内容をリモートリポジトリに反映させます。</p>
            </div>
            <div class="term">
                <h3>pull request（プルリクエスト）</h3>
                <p>自分がした変更をリポジトリに取り込んでもらうよう要求します。変更を本人以外がレビューしてから反映させることで一人で作ると気付かないコードの指摘やバグや記述ミスの発見ができ、コードの品質を高めます。</p>
            </div>
        </div>
    </div>
@endsection
