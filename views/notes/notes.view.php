<?php 
const PATH=__DIR__."/../";
require(PATH."partials/header.php");
?>

<?php require(PATH."partials/nav.php") ?>

<?php require(PATH."partials/banner.php") ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <ul>
        <?php foreach($notes as $note): ?>
        <li> <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline"><?php echo htmlspecialchars($note['body']); ?></a> </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <p><a class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 text-blue-500 underline" href="/addNote">Add Note</a></p>
  </main>
<?php require(PATH."partials/footer.php"); ?>