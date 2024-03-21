<div class="search-container">
    <form action="{{ route('git-commands.search') }}" method="GET">
        <input type="text" name="search" placeholder="コマンドや説明を入力" value="{{ request('search') }}">
        <button type="submit">検索</button>
    </form>
</div>
