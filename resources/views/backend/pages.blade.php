@extends('backend.app')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sayfalar
                <small>Optional description</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <form method="post" name="frm_setting" id="frm_setting" class="form-horizontal">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-12">

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