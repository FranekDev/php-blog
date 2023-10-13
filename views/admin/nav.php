<nav class="flex justify-around items-center gap-5 border-button border-2 rounded-xl px-4 py-2 bg-main">
    <a href="/admin" class="<?= urlIs('/admin') ? 'text-black' : 'text-secondary' ?> hover:text-zinc-500 transition-all">Admin</a>
    <a href="/admin/users" class="<?= urlIs('/admin/users') ? 'text-black' : 'text-secondary' ?> hover:text-zinc-500 transition-all">Users</a>
    <a href="/admin/threads" class="<?= urlIs('/admin/threads') ? 'text-black' : 'text-secondary' ?> hover:text-zinc-500 transition-all">Threads</a>
    <a href="/admin/comments" class="<?= urlIs('/admin/comments') ? 'text-black' : 'text-secondary' ?> hover:text-zinc-500 transition-all">Comments</a>
</nav>