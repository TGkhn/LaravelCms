@extends('backend.app')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ayarlar Sayfası
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <form method="post" name="frm_setting" id="frm_setting" class="form-horizontal">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-12">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_general" data-toggle="tab">Genel</a></li>
                                <li><a href="#tab_image" data-toggle="tab">Medya Ayarları</a></li>
                                <li><a href="#tab_social" data-toggle="tab">Sosyal Medya</a></li>
                                <li><a href="#tab_connect" data-toggle="tab">İletişim</a></li>
                                <li><a href="#tab_mail" data-toggle="tab">Mail</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_general">

                                    <div class="box-body">

                                        {{Form::bsText('txtSiteTitle',$ViewSetting["siteTitle"],'Site Başlığı','Site Başlığını Giriniz.') }}

                                        {{Form::bsText('txtSiteSlogan',$ViewSetting["siteSlogan"],'Site Slogan','Site Slogan.') }}

                                        {{Form::bsText('txtSiteKeywords',$ViewSetting["siteKeywords"],'Site Anahtar Kelimeler','Site Anahtar kelimeleri Giriniz.') }}

                                        {{Form::bsText('txtSiteDescription',$ViewSetting["siteDescription"],'Site Açıklama','Site Açıklamasını Giriniz.') }}

                                        {{Form::bsText('txtSiteUrl',$ViewSetting["siteUrl"],'Site URL','Site URL yolunu Giriniz.') }}

                                        {{Form::bsText('txtDateFormat',$ViewSetting["dateFormat"],'Tarih Biçimi','Tarih biçimi   .') }}


                                        <div class="form-group">
                                            <img src="/uploads/img/{{$ViewSetting["siteLogo"]}}">
                                            <label for="exampleInputFile">Logo</label>
                                            <input type="file" name="fileLogo" id="fileLogo">

                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>


                                    </div>
                                    <!-- /.box-body -->

                                    <!-- /.box-footer -->

                                </div>

                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_image">

                                    <div class="box-body">

                                        {{Form::bsText('txtSmallImageWidth',$ViewSetting["smallImageWidth"],'Küçük Resim Genişlik','Küçük Resim Genişlik') }}

                                        {{Form::bsText('txtSmallImageHeight',$ViewSetting["smallImageHeight"],'Küçük Resim Uzunluk','Küçük Resim Uzunluk') }}

                                        {{Form::bsText('txtMiddleImageWidth',$ViewSetting["middleImageWidth"],'Orta Resim Genişlik','Orta Resim Genişlik') }}

                                        {{Form::bsText('txtMiddleImageHeight',$ViewSetting["middleImageHeight"],'Orta Resim Uzunluk','Orta Resim Uzunluk') }}

                                        {{Form::bsText('txtLargeImageWidth',$ViewSetting["largeImageWidth"],'Büyük Resim Genişlik','Büyük Resim Genişlik') }}

                                        {{Form::bsText('txtLargeImageHeight',$ViewSetting["largeImageHeight"],'Büyük Resim Uzunluk','Büyük Resim Uzunluk') }}



                                    </div>

                                </div>
                                <!-- /.tab-pane -->


                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_social">

                                    <div class="box-body">

                                        {{Form::bsText('txtFacebook',$ViewSetting["urlFacebook"],'FaceBook','FaceBook') }}

                                        {{Form::bsText('txtTwitter',$ViewSetting["urlTwitter"],'Twitter','Twitter') }}

                                        {{Form::bsText('txtInstagram',$ViewSetting["urlInstagram"],'Instagram','Instagram') }}

                                        {{Form::bsText('txtGoogle',$ViewSetting["urlGoogle"],'Google Plus','Google Plus') }}

                                    </div>

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_connect">

                                    <div class="box-body">


                                        {{Form::bsText('txtAdrress',$ViewSetting["contactAdrress"],'Adres','Adres') }}

                                        {{Form::bsText('txtPhone',$ViewSetting["contactPhone"],'Telefon','Telefon') }}

                                        {{Form::bsText('txtMail',$ViewSetting["contactMail"],'Mail Adresi','Mail Adresi') }}


                                    </div>
                                    <!-- /.box-body -->

                                    <!-- /.box-footer -->

                                </div>
                                <div class="tab-pane" id="tab_mail">
                                    <div class="box-body">
                                        {{Form::bsText('txtMailServer',$ViewSetting["mailServer"],'Mail Sunucu Adresi','Mail Sunucu Adresi') }}

                                        {{Form::bsText('txtMailPort',$ViewSetting["mailPort"],'Mail Port','Mail Port') }}

                                        {{Form::bsText('txtMailUsername',$ViewSetting["mailUsername"],'E-Posta Kullanıcı Adı','E-Posta Kullanıcı Adı') }}

                                        {{Form::bsText('txtMailPassword',$ViewSetting["mailPassword"],'E-Posta Şifre','E-Posta Şifre') }}

                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right">Kaydet</button>
                            </div>
                        </div>

                        <!-- nav-tabs-custom -->
                    </div>
                    <!-- /.col -->


                </div>

            </form>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('js')
    <script src="/js/jquery.form.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/messages_tr.min.js"></script>
    <script src="/js/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#frm_setting').validate();

            $('#frm_setting').ajaxForm({

                beforeSubmit: function () {


                },
                success: function (response) {
                    swal(
                        response.procTitle,
                        response.procContent,
                        response.procStatus
                    )
                }

            });


        });


    </script>

@endsection
@section('css')
    <link href="/css/sweetalert2.css" rel="stylesheet"/>
    <!-- font-size: 1rem;  TODO Kaldırdık -->
@endsection