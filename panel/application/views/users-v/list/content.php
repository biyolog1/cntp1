<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Kullanıcı Listesi
            <a href="<?php echo base_url("Users/new_form"); ?>" class="btn  btn-primary btn-sm pull-right">
                <i class="fa fa-plus"></i> Yeni Ekle </a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">
            <?php if (empty($items)) { ?>
                <div class="alert alert-info text-center  ">
                    <!-- <h5 class="alert-title">Kayıt Bulunamadı</h5> -->
                    <i class="fa fa-plus-square"> </i>
                    <p> Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a
                                href="<?php echo base_url("Users/new_form"); ?>">tıklayınız.</a></p>
                </div>
            <?php } else { ?>
                <table id="default-datatable" data-plugin="DataTable"
                       class="table table-hover table-bordered table-striped content-container"
                       data-options="{
								responsive: true,
							    iDisplayLength: 500,
							    stateSave: true,
							     language: {
                                 url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Turkish.json'
                                                                            },
                                  }">
                    <thead>
                    <th class="w30">#id</th>
                    <th>Görsel</th>
                    <th>Kullanıcı Adı</th>
                    <th>Ad Soyad</th>
                    <th>E-Posta</th>
                    <th>Durumu</th>
                    <th>İşlem</th>

                    </thead>
                    <tbody>

                    <?php foreach ($items as $item) { ?>

                        <tr>
                            <td class="w30"><?php echo $item->id; ?></td>
                            <td><img width="75" src="<?php echo base_url("uploads/$viewFolder/$item->img_url")?>" alt="" class="img-rounded"></td>
                            <td><?php echo $item->user_name; ?></td>
                            <td><?php echo $item->full_name; ?></td>
                            <td><?php echo $item->email; ?></td>
                            <td class="w100">
                                <input
                                        data-url="<?php echo base_url("Users/isActiveSetter/$item->id"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo ($item->isActive) ? "checked" : ""; ?>
                                />
                            </td>
                            <td class="w300">
                                <button
                                        data-url="<?php echo base_url("Users/delete/$item->id"); ?>"
                                        class="btn btn-sm btn-danger  remove-btn">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                                <a href="<?php echo base_url("Users/update_form/$item->id"); ?>"
                                   class="btn btn-sm btn-info "><i class="fa fa-pencil-square-o"></i> Düzenle
                                </a>

                                <a href="<?php echo base_url("Users/update_password_form/$item->id"); ?>"
                                   class="btn btn-sm btn-purple "><i class="fa fa-key"></i> Şifre Değiştir
                                </a>

                            </td>
                        </tr>

                    <?php } ?>


                    </tbody>
                </table>
            <?php } ?>
        </div><!-- .widget -->
    </div><!-- END column -->
</div>