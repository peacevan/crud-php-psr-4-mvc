<div class="container mt-5">
  <a href="<?= BASEURL; ?>home" class="btn btn-primary">Back</a>
  <form class="mt-4" method="post" action="<?= BASEURL ?>home/store">
    <div class="form-group">
      <label>Descricao</label>
      <input type="descricao" class="form-control" name="descricao" placeholder="descricao do produto" required>
    </div>
    <div class="form-group">
      <label>Valor</label>
      <input type="text" class="form-control" name="valor" placeholder="valor" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>