<?php $this->myinclude("panel.layouts.header") ?>
                <form action="<?= $this->url('category/store') ?>" method="POST">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="name ...">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="description ...">
                    </section>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
                <?php $this->myinclude("panel.layouts.footer") ?>