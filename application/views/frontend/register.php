
<div class="modal fade" id="at-signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <?php echo form_open(site_url('store/auth/register')) ?>
                <div class="form-group">
                    <input type="email" autofocus="" name="email" required="" class="form-control-form " id="exampleInputEmaillog" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" required="" class="form-control-form " id="exampleInputPasswordpas" placeholder="Password">
                </div>
                <button type="submit" class="btn-lgin">Daftar</button>
            </form>
            <div class="signup-or-separator">
                <span class="h6 signup-or-separator--text">atau</span>
                <hr>
                <?php echo form_close(); ?>
                <button class="btn-fb"> <i class="fa fa-fw fa-facebook pull-left" aria-hidden="true"></i>
                    Masuk Dengan Facebook   </button> <br>  
                    <button class="btn-gp"> <i class="fa fa-fw fa-google pull-left" aria-hidden="true"></i>
                        Masuk Dengan Google </button> <br>      
                    </div>
                    <div class="modal-footer">
                        <div class="row">   
                            <div class="col-md-6">
                                <p class="ta-l">Sudah Punya Akun ? </p>
                            </div>  
                            <div class="col-md-4 col-md-offset-2">  
                                <button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-signin" >Login </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
