<nav class="bg-blue-500 flex justify-around py-6">
    <ul class="flex px-6 justify-center space-x-4 text-white">
        <li class="<?= urlIs("/index.php") ? 'bg-blue-800' : '' ?> hover:bg-blue-600 py-2 px-4 rounded-xl"><a href="/index.php">Hem</a></li>
        <li class="<?= urlIs("/omoss.php") ? 'bg-blue-800' : '' ?> hover:bg-blue-600 py-2 px-4 rounded-xl"><a href="/omoss.php">Om oss</a></li>
    </ul>
    <a class="text-white hover:bg-blue-600 rounded-xl py-2 px-4">Sixten Peterson</a>
</nav>