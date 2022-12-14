<div class="box box-{{ $style }}">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $title }}</h3>

        <div class="box-tools">
            {!! $tools !!}
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="form-horizontal">

        <div class="box-body">
            <div class="col-sm-8">
            
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            @foreach ($fields as $field)
                                {!! $field->render() !!}
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>

            

        </div>
        <!-- /.box-body -->
    </div>
</div>
