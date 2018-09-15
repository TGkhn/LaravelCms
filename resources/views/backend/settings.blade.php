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
            <form method="post" name="frm_setting" id="frm_setting" class="form-horizontal" >
                {{csrf_field()}}
            <div class="row">
                <div class="col-md-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Genel</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Sosyal Medya</a></li>
                            <li><a href="#tab_3" data-toggle="tab">İletişim</a></li>
                            <li><a href="#tab_4" data-toggle="tab">Mail</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">

                                    <div class="box-body">

                                        {{Form::bsText('txtSiteTitle',$ViewSetting["SiteTitle"],'Site Başlığı','Site Başlığını Giriniz.') }}

                                        {{Form::bsText('txtSiteKeywords',$ViewSetting["SiteKeywords"],'Site Anahtar Kelimeler','Site Anahtar kelimeleri Giriniz.') }}

                                        {{Form::bsText('txtSiteDescription',$ViewSetting["SiteDescription"],'Site Açıklama','Site Açıklamasını Giriniz.') }}

                                        {{Form::bsText('txtSiteUrl',$ViewSetting["SiteUrl"],'Site URL','Site URL yolunu Giriniz.') }}


                                        <div class="form-group">
                                            <img src="/uploads/img/{{$ViewSetting["SiteLogo"]}}">
                                            <label for="exampleInputFile">Logo</label>
                                            <input type="file" name="fileLogo"  id="fileLogo">

                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>



                                    </div>
                                    <!-- /.box-body -->

                                    <!-- /.box-footer -->

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                The European languages are members of the same family. Their separate existence is a myth.
                                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                                new common language would be desirable: one could refuse to pay expensive translators. To
                                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                                words. If several languages coalesce, the grammar of the resulting language is more simple
                                and regular than that of the individual languages.
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">

                                    <div class="box-body">


                                    </div>
                                    <!-- /.box-body -->

                                    <!-- /.box-footer -->

                            </div>
                            <div class="tab-pane" id="tab_4">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                                like Aldus PageMaker including versions of Lorem Ipsum.
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

                beforeSubmit:function () {


                },
                success:function (response ) {
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