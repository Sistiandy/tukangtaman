<div class="modal fade" id="at-signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <?php echo form_open(site_url('store/auth/register')) ?>
                <div class="form-group">
                    <input type="email" class="form-control-form" name="email" id="exampleInputEmaillog" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control-form" name="password" id="exampleInputPasswordpas" placeholder="Password">
                </div>
                <button type="submit" class="btn-lgin">Masuk</button>
                <?php echo form_close() ?>
                <div class="signup-or-separator">
                </div>
                <div class="modal-footer">
                    <div class="row">   
                        <div class="col-md-6">
                            <p class="ta-l">Belum Punya Akun ? </p>
                        </div>  
                        <div class="col-md-4 col-md-offset-2">  
                            <button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-signup" >Daftar </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
