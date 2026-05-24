<?php
// ============================================================
//  Supabase REST API helper
//  The publishable (anon) key is intentionally public —
//  access is enforced by Row Level Security in Supabase.
// ============================================================

define('SUPABASE_URL', 'https://qfloxznnkygxoalpgipl.supabase.co');
define('SUPABASE_KEY', 'sb_publishable_kQD_2g30zSyg8w9j1qou_w_z1ggKSxd');

function supabase_get(string $table, string $query = ''): array {
    $url = SUPABASE_URL . '/rest/v1/' . $table . ($query ? '?' . $query : '');

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 8,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTPHEADER     => [
            'apikey: '               . SUPABASE_KEY,
            'Authorization: Bearer ' . SUPABASE_KEY,
            'Accept: application/json',
        ],
    ]);
    $body      = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($body === false || $http_code >= 400) {
        error_log(sprintf('Supabase GET failed: %s (HTTP %s) — body: %s', $url, $http_code, substr((string)$body, 0, 200)));
        return [];
    }

    $data = json_decode($body, true);
    return is_array($data) ? $data : [];
}
