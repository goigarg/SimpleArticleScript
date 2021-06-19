



       <?php foreach ($article->errors as $error): ?>
            <div class="alert alert-warning"><?=$error ?></div>

        <?php endforeach; ?>
       

<form method = "post" >
    <div class="form-group">
        <label>Title</label>
        <input name = "title" class="form-control" value="<?= htmlspecialchars($article->title); ?>">
</div>
   <label>Content</label>
    <textarea name = "post" class="form-control"><?= htmlspecialchars($article->post); ?></textarea><br>
    
      <button class = "btn btn-outline-dark" style="width: 30%;">Submit</button>
      <?php if ($_SERVER['REQUEST_URI'] != 'new.php'): ?>

      <?php endif; ?>
  </form>
  </div>


