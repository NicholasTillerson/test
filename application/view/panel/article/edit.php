<?php $this->myinclude("panel.layouts.header") ?>

                <form action="<?= $this->url('article/update/'.$article['id']) ?>" method="POST">
                    <section class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="<?= $article['title'] ?>" placeholder="title ...">
                    </section>
                    <section class="form-group">
                        <label for="cat_id">Category</label>
                        <select class="form-control" id="cat_id" name="cat_id">
                        <?php foreach($categories as $category){ ?>
                        <option value="<?= $category['id'] ?>"      <?= ($article['id'] == $category['id']) ? 'selected' : '' ?>    ><?= $category['name'] ?></option>
                        <?php } ?>
                        </select>
                    </section>
                    <section class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body"  class="form-control" id="body" rows="5" placeholder="body ..." ><?= $article['body'] ?></textarea>
                    </section>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
   <?php $this->myinclude("panel.layouts.footer") ?>