<?php // PHP 開始タグ - この前には、空白も含め何も書かないでください。

// 挿入するカスタム関数
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
function app_meta() {
    echo '<meta name="apple-itunes-app" content="app-id=1006617500">' . "\n";
}
add_action( 'wp_head', 'favicon_link' );
add_action( 'wp_head', 'app_meta' );
?>
