<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <p class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p><?= $note['body'] ?></p>
        <p class="mt-6">
            <a href="/notes" class="text-pink-500 underline">back to notes list</a>
        </p>
        <p><?= htmlspecialchars($note['body']) ?></p>
    </div>
</main>

<?php require('partials/footer.php') ?>
