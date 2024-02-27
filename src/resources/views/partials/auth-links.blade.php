@if (Route::has('login'))
    <div class="auth-links">
        @auth
            <a href="{{ url('/profile') }}" class="primary-button">マイページ</a>
        @else
            <a href="{{ route('login') }}" class="primary-button">ログイン</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="primary-button">新規登録</a>
            @endif
        @endauth
    </div>
@endif
