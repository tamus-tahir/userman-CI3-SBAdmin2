<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="brand">Brand <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('brand') ? 'is-invalid' : null; ?>" id="brand" name="brand" autocomplete="off" value="<?= $ubah->brand; ?>">
                    <?= form_error('brand'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="login_title">Login Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('login_title') ? 'is-invalid' : null; ?>" id="login_title" name="login_title" autocomplete="off" value="<?= $ubah->login_title; ?>">
                    <?= form_error('login_title'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="copyright">Copyright <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('copyright') ? 'is-invalid' : null; ?>" id="copyright" name="copyright" autocomplete="off" value="<?= $ubah->copyright; ?>">
                    <?= form_error('copyright'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sidebar">Background Sidebar <span class="text-danger">*</span></label>
                    <select id="sidebar" class="form-control <?= form_error('sidebar') ? 'is-invalid' : null; ?>" name="sidebar">
                        <option value="">-- Pilih Background Sidebar --</option>
                        <option value="bg-danger sidebar-dark" <?= $ubah->sidebar == 'bg-danger sidebar-dark' ? 'selected' : ''; ?>>Danger</option>
                        <option value="bg-primary sidebar-dark" <?= $ubah->sidebar == 'bg-primary sidebar-dark' ? 'selected' : ''; ?>>Primary</option>
                        <option value="bg-success sidebar-dark" <?= $ubah->sidebar == 'bg-success sidebar-dark' ? 'selected' : ''; ?>>Success</option>
                        <option value="bg-info sidebar-dark" <?= $ubah->sidebar == 'bg-info sidebar-dark' ? 'selected' : ''; ?>>Info</option>
                        <option value="bg-indigo sidebar-dark" <?= $ubah->sidebar == 'bg-indigo sidebar-dark' ? 'selected' : ''; ?>>Indigo</option>
                        <option value="bg-purple sidebar-dark" <?= $ubah->sidebar == 'bg-purple sidebar-dark' ? 'selected' : ''; ?>>Purple</option>
                        <option value="bg-pink sidebar-dark" <?= $ubah->sidebar == 'bg-pink sidebar-dark' ? 'selected' : ''; ?>>Pink</option>
                        <option value="bg-teal sidebar-dark" <?= $ubah->sidebar == 'bg-teal sidebar-dark' ? 'selected' : ''; ?>>Teal</option>
                        <option value="bg-cyan sidebar-dark" <?= $ubah->sidebar == 'bg-cyan sidebar-dark' ? 'selected' : ''; ?>>Cyan</option>
                        <option value="bg-secondary sidebar-dark" <?= $ubah->sidebar == 'bg-secondary sidebar-dark' ? 'selected' : ''; ?>>Secondary</option>
                        <option value="bg-dark sidebar-dark" <?= $ubah->sidebar == 'bg-dark sidebar-dark' ? 'selected' : ''; ?>>Dark</option>
                    </select>
                    <?= form_error('sidebar'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="author">Author <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('author') ? 'is-invalid' : null; ?>" id="author" name="author" autocomplete="off" value="<?= $ubah->author; ?>">
                    <?= form_error('author'); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="keywords">Keywords <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('keywords') ? 'is-invalid' : null; ?>" id="keywords" name="keywords" autocomplete="off" value="<?= $ubah->keywords; ?>">
            <?= form_error('keywords'); ?>
        </div>
        <div class="form-group">
            <label for="description">Description <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('description') ? 'is-invalid' : null; ?>" id="description" name="description" autocomplete="off" value="<?= $ubah->description; ?>">
            <?= form_error('description'); ?>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="logo">Logo <span class="text-danger">* (Max Size 500kb)</span></label>
                    <div>
                        <input type="file" id="real-file" hidden="hidden" name="logo">
                        <button type="button" class="btn btn-outline-success" id="custom-button">
                            Upload File <i class="fas fa-upload ml-2"></i>
                        </button>
                        <span id="custom-text" class="text-secondary ml-2">Tidak ada file yang diupload</span>
                    </div>
                    <?= form_error('logo'); ?>
                </div>

                <div class="form-group">
                    <img id="prev" src="<?= base_url('assets/img/' . $ubah->logo); ?>" height="350" width="100%">
                </div>

                <input type="hidden" name="logoold" value="<?= $ubah->logo; ?>">
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label for="background">Background <span class="text-danger">* (Landscape, Max Size 500kb)</span></label>
                    <div>
                        <input type="file" id="real-file2" hidden="hidden" name="background">
                        <button type="button" class="btn btn-outline-success" id="custom-button2">
                            Upload File <i class="fas fa-upload ml-2"></i>
                        </button>
                        <span id="custom-text2" class="text-secondary ml-2">Tidak ada file yang diupload</span>
                    </div>
                    <?= form_error('background'); ?>
                </div>

                <div class="form-group">
                    <img id="prev2" src="<?= base_url('assets/img/' . $ubah->background); ?>" height="350" width="100%">
                </div>

                <input type="hidden" name="backgroundold" value="<?= $ubah->background; ?>">
            </div>
        </div>

        <button class="mt-3 btn btn-primary" type="submit">Ubah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->
<!-- end modal -->

<?php require_once('application/views/templates/footer.php'); ?>

<!-- script -->
<!-- end script -->