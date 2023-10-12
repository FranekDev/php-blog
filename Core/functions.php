<?php

use Core\Response;

function dd($value): never
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs(string $value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort(int $code = Response::NOT_FOUND): never
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function authorize(bool $condition, $status = Response::FORBIDDEN) : void
{
    if (! $condition) {
        abort($status);
    }
}

function base_path(string $path): string
{
    return BASE_PATH . $path;
}

function view(string $path, array $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}

function redirect(string $path)
{
    header("location: {$path}");
    exit();
}

function getUserColor(int $id): string
{
    return match ($id % 3) {
        1 => 'bg-greenPost',
        2 => 'bg-bluePost',
        default => 'bg-button',
    };
}

function formatDateString($date): string
{
    $date = strtotime($date);
    return date('d/m/y H:i', $date);
}
