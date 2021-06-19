<?php

require "includes/init.php";

require "includes/head.php";

$db = new Database();
$conn = $db->getConn();



if(isset($_GET['id']) && is_numeric($_GET['id'])) {

$article = Article::getArticle($conn,$_GET["id"]);

}

 ?>

    <?php if (empty($article)): ?>
      <p>Nothing found.</p>
    <?php else: ?>

  <div class="container">
      <div class="alert alert-info" style="margin-top: 10px;"> 
      <?= htmlspecialchars($article->title); ?> 
      </div>
      
      <div class="card-body" style="padding-top: 5px !important;">
      <?= str_replace(array("\n"),array("<br>"),htmlspecialchars($article->post)); ?>
      </div>
  </div>
  </div>

  <?php if (isset($_SESSION['login']) && $_SESSION['login']): ?>

    <div class="container">
      <a class="btn btn-outline-dark" href = "edit.php?id=<?= $article->id ?>">Edit Post</a>
      <a class="btn btn-outline-dark" href = "delete.php?id=<?= $_GET["id"] ?>">Delete Post</a>
    </div>
  <?php endif; ?>
<?php endif; ?>


<?php require "includes/foot.php" ?>
