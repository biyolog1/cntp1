<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<span class='text-danger'> <b><i>$item->company_name </i></i></b></span> "; ?>

        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <form action="<?php echo base_url("Settings/update/$item->id"); ?>" method="post" enctype="multipart/form-data">

            <div class="widget">
                <div class="m-b-lg nav-tabs-horizontal">
                    <!-- tabs list -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-3" role="tab"
                                                                  data-toggle="tab">Firma Bilgileri</a></li>
                        <li role="presentation"><a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab">Hakkımızda</a>
                        </li>
                        <li role="presentation"><a href="#tab-3" aria-controls="tab-2" role="tab" data-toggle="tab">Misyon</a>
                        </li>
                        <li role="presentation"><a href="#tab-4" aria-controls="tab-3" role="tab" data-toggle="tab">Vizyon</a>
                        </li>
                        <li role="presentation"><a href="#tab-5" aria-controls="tab-4" role="tab" data-toggle="tab">Sosyal
                                Medya</a></li>
                    </ul><!-- .nav-tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content p-md">
                        <div role="tabpanel" class="tab-pane in active fade" id="tab-1">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Firma Adı <i class="fa fa-star text-danger"></i></label>
                                    <input class="form-control" placeholder="Firma Adını Giriniz" name="company_name"
                                           value="<?php echo isset($form_error) ? set_value("company_name") : $item->company_name; ?>"
                                           required>
                                    <?php if (isset($form_error)) { ?>
                                        <small class="pull-right input-form-error"> <?php echo form_error("company_name"); ?></small>
                                    <?php } ?>
                                </div><!-- .form-group -->

                                <div class="form-group col-md-3">
                                    <label>Firma Logosu Yükleyin <i class="fa fa-star text-danger"></i></label>
                                    <input type="file" name="logo" class="form-control" required>
                                </div><!-- .form-group -->
                                <div class="col-md-2">
                                    <label>Mevcut Logonuz</label>
                                    <img src="<?php echo base_url("uploads/$viewFolder/$item->logo"); ?>" alt="<?php echo $item->company_name; ?>" class="img-responsive" width="100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label> Email Adresi <i class="fa fa-star text-danger"></i></label>
                                    <input class="form-control" placeholder="Email Adresiniz" name="email"
                                           value="<?php echo isset($form_error) ? set_value("email") : $item->email; ?>" required>
                                    <?php if (isset($form_error)) { ?>
                                        <small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
                                    <?php } ?>
                                </div><!-- .form-group -->
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Telefon 1 <i class="fa fa-star text-danger"></i></label>
                                    <input class="form-control" placeholder="Telefon Numaranız" name="phone_1"
                                           value="<?php echo isset($form_error) ? set_value("phone_1") : $item->phone_1; ?>"
                                           required>
                                    <?php if (isset($form_error)) { ?>
                                        <small class="pull-right input-form-error"> <?php echo form_error("phone_1"); ?></small>
                                    <?php } ?>
                                </div><!-- .form-group -->
                                <div class="form-group col-md-4">
                                    <label>Telefon 2</label>
                                    <input class="form-control" placeholder="Diğer Telefon Numaranız (Opsiyonel)"
                                           name="phone_2" value="<?php echo isset($form_error) ? set_value("phone_2") : $item->phone_2; ?>">
                                </div><!-- .form-group -->
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Faks 1</label>
                                    <input class="form-control" placeholder="Faks Numaranız" name="fax_1" value="<?php echo isset($form_error) ? set_value("fax_1") : $item->fax_1; ?>">
                                </div><!-- .form-group -->
                                <div class="form-group col-md-4">
                                    <label>Faks 2</label>
                                    <input class="form-control" placeholder="Diğer Faks Numaranız (Opsiyonel)"
                                           name="fax_2" value="<?php echo isset($form_error) ? set_value("fax_2") : $item->fax_2; ?>">
                                </div><!-- .form-group -->
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Vergi Dairesi <i class="fa fa-star text-danger"></i></label>
                                    <input class="form-control" placeholder="Vergi Daireniz" name="vergi_dairesi"
                                           value="<?php echo isset($form_error) ? set_value("vergi_dairesi") : $item->vergi_dairesi; ?>"
                                           required>
                                    <?php if (isset($form_error)) { ?>
                                        <small class="pull-right input-form-error"> <?php echo form_error("vergi_dairesi"); ?></small>
                                    <?php } ?>
                                </div><!-- .form-group -->
                                <div class="form-group col-md-4">
                                    <label>Vergi Numarası <i class="fa fa-star text-danger"></i></label>
                                    <input class="form-control" placeholder="Vergi Numaranız"
                                           name="vergi_no"
                                           value="<?php echo isset($form_error) ? set_value("vergi_no") : $item->vergi_no; ?>"
                                           required>
                                    <?php if (isset($form_error)) { ?>
                                        <small class="pull-right input-form-error"> <?php echo form_error("vergi_no"); ?></small>
                                    <?php } ?>
                                </div><!-- .form-group -->
                            </div>
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label>Adres Bilgisi</label>
                                    <textarea name="address" class="m-0" data-plugin="summernote"
                                              data-options="{height: 150}"><?php echo isset($form_error) ? set_value("address") : $item->address; ?></textarea>
                                </div><!-- .form-group -->
                            </div>
                        </div><!-- .tab-pane  -->
                        <div role="tabpanel" class="tab-pane fade" id="tab-2">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Hakkımızda</label>
                                    <textarea name="about_us" class="m-0" data-plugin="summernote"
                                              data-options="{height: 350}"><?php echo isset($form_error) ? set_value("about_us") : $item->about_us; ?></textarea>
                                </div><!-- .form-group -->
                            </div>
                        </div><!-- .tab-pane  -->
                        <div role="tabpanel" class="tab-pane fade" id="tab-3">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Misyon</label>
                                    <textarea name="mission" class="m-0" data-plugin="summernote"
                                              data-options="{height: 350}"><?php echo isset($form_error) ? set_value("mission") : $item->mission; ?></textarea>
                                </div><!-- .form-group -->
                            </div>
                        </div><!-- .tab-pane  -->
                        <div role="tabpanel" class="tab-pane fade" id="tab-4">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Vizyon</label>
                                    <textarea name="vision" class="m-0" data-plugin="summernote"
                                              data-options="{height: 350}"><?php echo isset($form_error) ? set_value("vision") : $item->vision; ?></textarea>
                                </div><!-- .form-group -->
                            </div>
                        </div><!-- .tab-pane  -->
                        <div role="tabpanel" class="tab-pane fade" id="tab-5">

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label><i class="fa fa-2x fa-facebook"> Facebook</i></label>
                                    <input class="form-control" placeholder="Facebook Adresiniz" name="facebook"
                                           value="<?php echo isset($form_error) ? set_value("facebook") : $item->facebook; ?>">
                                </div><!-- .form-group -->

                                <div class="form-group col-md-4">
                                    <label><i class="fa fa-2x fa-twitter"> Twitter</i></label>
                                    <input class="form-control" placeholder="Twitter Adresiniz" name="twitter"
                                           value="<?php echo isset($form_error) ? set_value("twitter") : $item->twitter; ?>">
                                </div><!-- .form-group -->
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label><i class="fa fa-2x fa-instagram"> İnstagram</i></label>
                                    <input class="form-control" placeholder="İnstagram Adresiniz" name="instagram"
                                           value="<?php echo isset($form_error) ? set_value("instagram") : $item->instagram; ?>">
                                </div><!-- .form-group -->
                                <div class="form-group col-md-4">
                                    <label><i class="fa fa-2x fa-linkedin"> LinkedIn</i></label>
                                    <input class="form-control" placeholder="LinkedIn Adresiniz" name="linkedin"
                                           value="<?php echo isset($form_error) ? set_value("linkedin") : $item->linkedin; ?>">
                                </div><!-- .form-group -->
                            </div>
                        </div><!-- .tab-pane  -->
                    </div><!-- .tab-content  -->

                </div><!-- .nav-tabs-horizontal -->
            </div><!-- .widget -->
            <button type="submit" class="btn btn-primary btn-md "> Güncelle</button>
            <a href="<?php echo base_url("Settings"); ?>" class="btn btn-md btn-danger"> İptal </a>
        </form>
    </div><!-- END column -->
</div>