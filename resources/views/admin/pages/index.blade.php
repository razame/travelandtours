@extends('admin.layouts.app')

@section('styles')
    <style>
        .pull-right{
            float: right;
        }
    </style>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Package Pages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="#">Package Pages</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('admin.layouts.partials.message')
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-tools">
                            <a class="btn btn-primary pull-right" href="{{route('pages.create')}}">Create Page</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="mt-60">
                            <table class="table table-bordered">
                                <thead>
                                    @if(!empty($pages))
                                        <tr>
                                            <th>{{__('general.slug')}}</th>
                                            <th style="width: 40px">Edit</th>
                                            <th style="width: 40px">Delete</th>
                                        </tr>
                                    @else
                                        <tr>
                                            <th>No Records found</th>
                                        </tr>
                                    @endif
                                </thead>
                                <tbody>
                                    @foreach($pages as $page)
                                        <tr>
                                            <td>{!!$page->slug!!}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{route('pages.edit', $page->id)}}">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{route('pages.destroy', $page->id)}}" id="delete{{$page->id}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-danger" onclick='confirmDelete("{{$page->id}}", "Page")'>Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        {{$pages->links()}}
{{--                        Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about--}}
{{--                        the plugin.--}}
                    </div>
                </div>
                <!-- /.card -->

                <!-- SELECT2 EXAMPLE -->
                {{--
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Select2 (Bootstrap4 Theme)</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Minimal</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Disabled</label>
                                    <select class="form-control select2bs4" disabled="disabled" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Multiple</label>
                                    <select class="select2bs4" multiple="multiple" data-placeholder="Select a State"
                                            style="width: 100%;">
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Disabled Result</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option disabled="disabled">California (disabled)</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                        the plugin.
                    </div>
                </div>
                <!-- /.card -->

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Bootstrap Duallistbox</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Multiple</label>
                                    <select class="duallistbox" multiple="multiple">
                                        <option selected>Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                        the plugin.
                    </div>
                </div>
                <!-- /.card -->

                <div class="row">
                    <div class="col-md-6">

                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Input masks</h3>
                            </div>
                            <div class="card-body">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>Date masks:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- Date mm/dd/yyyy -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>US phone mask:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>Intl US phone mask:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control"
                                               data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- IP mask -->
                                <div class="form-group">
                                    <label>IP mask:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Color & Time Picker</h3>
                            </div>
                            <div class="card-body">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <label>Color picker:</label>
                                    <input type="text" class="form-control my-colorpicker1">
                                </div>
                                <!-- /.form group -->

                                <!-- Color Picker -->
                                <div class="form-group">
                                    <label>Color picker with page:</label>

                                    <div class="input-group my-colorpicker2">
                                        <input type="text" class="form-control">

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-square"></i></span>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- time Picker -->
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Time picker:</label>

                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                                            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col (left) -->
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Date picker</h3>
                            </div>
                            <div class="card-body">
                                <!-- Date range -->
                                <div class="form-group">
                                    <label>Date range:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="reservation">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label>Date and time range:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="reservationtime">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label>Date range button:</label>

                                    <div class="input-group">
                                        <button type="button" class="btn btn-default float-right" id="daterange-btn">
                                            <i class="far fa-calendar-alt"></i> Date range picker
                                            <i class="fas fa-caret-down"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.form group -->

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- iCheck -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">iCheck Bootstrap - Checkbox &amp; Radio Inputs</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1" checked>
                                                <label for="checkboxPrimary1">
                                                </label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary2">
                                                <label for="checkboxPrimary2">
                                                </label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary3" disabled>
                                                <label for="checkboxPrimary3">
                                                    Primary checkbox
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="radio" id="radioPrimary1" name="r1" checked>
                                                <label for="radioPrimary1">
                                                </label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <input type="radio" id="radioPrimary2" name="r1">
                                                <label for="radioPrimary2">
                                                </label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <input type="radio" id="radioPrimary3" name="r1" disabled>
                                                <label for="radioPrimary3">
                                                    Primary radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" checked id="checkboxDanger1">
                                                <label for="checkboxDanger1">
                                                </label>
                                            </div>
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="checkboxDanger2">
                                                <label for="checkboxDanger2">
                                                </label>
                                            </div>
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" disabled id="checkboxDanger3">
                                                <label for="checkboxDanger3">
                                                    Danger checkbox
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-danger d-inline">
                                                <input type="radio" name="r2" checked id="radioDanger1">
                                                <label for="radioDanger1">
                                                </label>
                                            </div>
                                            <div class="icheck-danger d-inline">
                                                <input type="radio" name="r2" id="radioDanger2">
                                                <label for="radioDanger2">
                                                </label>
                                            </div>
                                            <div class="icheck-danger d-inline">
                                                <input type="radio" name="r2" disabled id="radioDanger3">
                                                <label for="radioDanger3">
                                                    Danger radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-success d-inline">
                                                <input type="checkbox" checked id="checkboxSuccess1">
                                                <label for="checkboxSuccess1">
                                                </label>
                                            </div>
                                            <div class="icheck-success d-inline">
                                                <input type="checkbox" id="checkboxSuccess2">
                                                <label for="checkboxSuccess2">
                                                </label>
                                            </div>
                                            <div class="icheck-success d-inline">
                                                <input type="checkbox" disabled id="checkboxSuccess3">
                                                <label for="checkboxSuccess3">
                                                    Success checkbox
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-success d-inline">
                                                <input type="radio" name="r3" checked id="radioSuccess1">
                                                <label for="radioSuccess1">
                                                </label>
                                            </div>
                                            <div class="icheck-success d-inline">
                                                <input type="radio" name="r3" id="radioSuccess2">
                                                <label for="radioSuccess2">
                                                </label>
                                            </div>
                                            <div class="icheck-success d-inline">
                                                <input type="radio" name="r3" disabled id="radioSuccess3">
                                                <label for="radioSuccess3">
                                                    Success radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- Bootstrap Switch -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Bootstrap Switch</h3>
                            </div>
                            <div class="card-body">
                                <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch>
                                <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (right) -->
                </div>
                <!-- /.row -->
                --}}
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection


@section('scripts')
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with page
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            });

            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });

        })
    </script>
@endsection
