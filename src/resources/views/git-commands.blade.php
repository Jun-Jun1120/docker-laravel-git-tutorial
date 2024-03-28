@extends('layouts.global')

@section('title', 'Git入門コマンド一覧')

@section('content')
    @include('partials.search')

    <div class="contents">
        <h1>Gitコマンド一覧</h1>
        <hr>

        {{-- カテゴリー別にコマンドを表示 --}}
        @foreach ($categories as $category => $commands)
            <h2>{{ $category }}</h2>
            <table class="git-commands-table">
                <thead>
                <tr>
                    <th>コマンド</th>
                    <th>説明</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($commands as $command)
                    <tr>
                        <td>{{ $command->command }}</td>
                        <td>{{ $command->description }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endforeach
    </div>
@endsection
