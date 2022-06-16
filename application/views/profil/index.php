<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambahkan Ekskul</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Informasi</th>
                        <th scope="col">Image</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $o = 1;
                    foreach ($profil as $p) : ?>
                        <tr>
                            <th scope="row"><?= $o; ?></th>
                            <td><?= $profil['judul_informasi']; ?></td>
                            <td><?= $profil['isi_informasi'] ?></td>
                            <td><?= $profil['image'] ?></td>
                            <td><?= $profil['is_active'] ?></td>
                            <td>
                                <a href="<?= base_url('profil/profilku/' . $profil['id']) ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('profil/profilku/' . $profil['id']) ?>" class="badge badge-danger" data-toggle="modal" data-target="#deleteSubmenu">Delete</a>
                            </td>
                        </tr>
                        <?php $o++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="form-group">
                <select name="judul_informasi" id="judul_informasi" class="form-control">
                <option value="BASKET">BASKET</option>
                                    <option value="FUTSAL">FUTSAL</option>
                                    <option value="VOLI">VOLI</option>
                                    <option value="SILAT">SILAT</option>
                                    <option value="KARATE">KARATE</option>
                                    <option value="TAEKWONDO">TAEKWONDO</option>
                                    <option value="BADMINTON">BADMINTON</option>
                                    <option value="SENI">SENI</option>
                                    <option value="ENGLISH CLUB">ENGLISH CLUB</option>
                                    <option value="JAPANESE CLUB">JAPANESE CLUB</option>
                                    <option value="MARAWIS">MARAWIS</option>
                                    <option value="MARAWIS">KASUNDAAN</option>Select Menu</option>">Select Menu</option>
                </select>
            </div>
            <form action="<?= base_url('profil'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi_informasi" name="isi_informasi" placeholder="Isi Informasi">
                    </div>
                    <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <!--    -->
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" name="image" id="image" class="custom-file-input">
                                <label class="custom-file-label" for="image">Choose File</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambahkan ekskul</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteSubmenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Submenu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are you sure want to delete <?= $profil['profil']; ?> Submenu?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('profil/deletesub/') . $profil['id']; ?>">Delete</a>
            </div>
        </div>
    </div>
</div>