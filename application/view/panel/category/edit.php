<?php $this->myinclude("panel.layouts.header") ?>
                <form action="<?= $this->url('category/update/'.$category['id']) ?>"  method="POST">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name" value="<?= $category['name'] ?>" placeholder="name ...">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="description ..." value="<?= $category['description'] ?>">
                    </section>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

                <?php $this->myinclude("panel.layouts.footer") ?>