@extends('layout.app')
@include('inc.dashboardbar')

@section('content')
    <div class="container">
        @if(count($allocate) > 0)

            <div class="row clearfix">
                <div class="col-md-12 column">
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                        <tr >
                            <th class="text-center">
                                Task ID
                            </th>
                            <th class="text-center">
                                Task Name
                            </th>
                            <th class="text-center">
                                Duration
                            </th>
                            <th class="text-center">
                                Start (Date)
                            </th>
                            <th class="text-center">
                                Finish (Date)
                            </th>
                            <th class="text-center">
                                Resource Name
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allocate as $a)
                            <tr id='addr0'>
                                <td>
                                    {{$a->taskId}}
                                    {{Form::text('taskId', $a->taskId, ['hidden'])}}


                                </td>
                                <td>
                                    {{$a->taskName}}
                                </td>
                                <td>
                                    {{$a->duration}}
                                </td>
                                <td>
                                    {{$a->start}}
                                </td>
                                <td>
                                    {{$a->finish}}

                                </td>
                                <td>
                                    {{$a->resourceName}}

                                </td>

                            </tr>
                        @endforeach
                        <tr id='addr1'></tr>
                        </tbody>



                    </table>


                </div>


            </div>


        @else
          No Resources assigned to tasks.
        @endif
    </div>
@endsection
