<?php
if (isset($slideshow)) {
    $id = $slideshow['slideshow_id'];
    $TitleValue = $slideshow['slideshow_title'];
    $DescValue = $slideshow['slideshow_desc'];
    $ImageValue = $slideshow['slideshow_image'];
    $StatusValue = $slideshow['slideshow_is_active'];
} else {
    $TitleValue = set_value('slideshow_title');
    $DescValue = set_value('slideshow_desc');
    $ImageValue = set_value('slideshow_image');
    $StatusValue = set_value('slideshow_is_active');
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Slideshow
            <small><?php echo $operation; ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Slideshow</li>
            <li class="active"><?php echo $operation; ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo form_open_multipart(current_url()); ?>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-9">
                <div class="box box-success">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo validation_errors(); ?>
                        <?php if (isset($slideshow)) { ?>
                        <input type="hidden" name="slideshow_id" value="<?php echo $slideshow['slideshow_id']; ?>">
                        <?php }?>
                        <div class="form-group">
                            <label>Judul <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                            <input name="slideshow_title" required="" type="text" class="form-control" value="<?php echo $TitleValue ?>" placeholder="Judul">
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="slideshow_desc" placeholder="Deskripsi"><?php echo $DescValue ?></textarea>
                        </div>  

                        <div class="form-group">
                            <label>Status <small data-toggle="tooltip" title="Wajib diisi">*</small></label>
                            <div class="radio">
                              <label>
                                <input type="radio" required="" name="slideshow_is_active" value="1" <?php echo $StatusValue == true? 'checked' : '' ?>>
                                Terbit
                            </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" required="" name="slideshow_is_active" value="0" <?php echo $StatusValue == false? 'checked' : '' ?>>
                            Draft
                        </label>
                    </div>
                </div>  

                <div class="form-group">
                    <label>Gambar</label>
                    <div class="input-group image-preview">
                        <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                        <span class="input-group-btn">
                            <!-- image-preview-clear button -->
                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                <span class="glyphicon glyphicon-remove"></span> Clear
                            </button>
                            <!-- image-preview-input -->
                            <div class="btn btn-default image-preview-input">
                                <span class="glyphicon glyphicon-folder-open"></span>
                                <span class="image-preview-input-title">Browse</span>
                                <input type="file" accept="image/png, image/jpeg, image/gif" name="inputPict"> <!-- rename it -->
                            </div>
                        </span>
                    </div><!-- /input-group image-preview [TO HERE]--> 
                    <?php if (isset($slideshow) AND $slideshow['slideshow_image'] != null): ?>
                        <div class="thumbnail">
                            <img src="<?php echo upload_url($ImageValue) ?>" class="img-responsive" alt="Image">
                        </div>
                    <?php endif ?>
                </div>

                <p class="text-muted">*) Kolom wajib diisi.</p>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <button type="submit" class="btn btn-flat btn-block btn-success"><span class="fa fa-check-circle"></span> Simpan</button>
                    <a href="<?php echo site_url('admin/slideshow'); ?>" class="btn btn-flat btn-block btn-info"><span class="fa fa-arrow-circle-left"></span> Batal</a>
                    <?php if (isset($slideshow)) { ?>
                    <a href="#delModal" class="btn btn-flat btn-block btn-danger" data-toggle="modal" ><span class="fa fa-close"></span> Hapus</a>
                    <?php } ?>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<!-- /.row -->
</section>
<!-- /.content -->

<?php if (isset($slideshow)) { ?>
<div class="modal modal-danger fade" id="delModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title"><span class="fa fa-warning"></span> Konfirmasi penghapusan</h3>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin akan menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <?php echo form_open('admin/slideshow/delete/' . $slideshow['slideshow_id']); ?>
                    <input type="hidden" name="delName" value="<?php echo $slideshow['slideshow_title']; ?>">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"></span> Batal</button>
                    <button type="submit" class="btn btn-outline"><span class="fa fa-check"></span> Hapus</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <?php } ?>
</div>