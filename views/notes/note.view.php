<?php 
const PATH=__DIR__."/../";
require(PATH."partials/header.php");
?>

<?php require(PATH."partials/nav.php") ?>

<?php require(PATH."partials/banner.php") ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p><?= $note['body']; ?></p>


      <div class="mt-6">
        <a href="/note/edit?id=<?= $note['id']; ?>" class="text-gray-500 border border-current px-4 py-1 rounded">Edit</a>
      </div>
      <form action="" class="mt-6" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id']; ?>">
        <button class="text-red-500">Delete</button>
      </form>
      <br>
      <a href="/notes" class="underline">Go Back...</a>
    </div>
  </main>
  <?php require(PATH."partials/footer.php"); ?>