# ベースイメージの指定
FROM mysql:8.0.32-1.2.11-server

# 環境変数の設定
ENV MYSQL_DATABASE=laravel \
    MYSQL_USER=phper \
    MYSQL_PASSWORD=secret \
    MYSQL_ROOT_PASSWORD=secret \
    TZ=Asia/Tokyo

# MySQLの設定ファイルをコピー
COPY ./my.cnf /etc/my.cnf

# 必要なパッケージのインストールと設定ファイルのパーミッション設定
RUN chmod 644 /etc/my.cnf && \
    apt-get update && \
    apt-get install -y tzdata && \
    rm -rf /var/lib/apt/lists/*  # aptのキャッシュを削除
