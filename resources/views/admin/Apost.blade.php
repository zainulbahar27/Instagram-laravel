@extends('layouts.admin')
Post Tabel

@section('title')

@endsection

@section('content')

           <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!--Field Tables-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            Post User Tables
                        </div>

                        <!--Panel Body Tables -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">

                                <!--Isi Tabel-->
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>user</th>
                                            <th>caption</th>
                                            <th>Time Post</th>
                                            <th>Go to</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($reports) != 0)
                                        @foreach($reports as $r)
                                        <tr class="odd gradeX">
                                            <td>{{ $r['id']  }}</td>
                                            <td>{{ $r['user']  }}</td>
                                            <td>{{ $r['caption']  }}</td>
                                            <td>{{ $r['created_at']  }}</td>

                                            <td>
                                                  <a href="#"
                                                  <button type="submit" class="btn btn-warning btn-sm">Go to Post</button>
                                                  </a>
                                            </td>
                                            <td>
                                                 <a href="#"
                                                  <button type="submit" class="btn btn-danger btn-sm">Delete Post</button>
                                                  </a>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                  </tbody>
                                </table>
                                <!--Akhir isi Tabel-->
                                
                            </div>
                               <div class="col-md-offset-4 col-md-4">
                                @if(Session::has('status'))
                                    <div class="alert alert-{{Session::get('status')}}" role="alert">
                                        <strong>{{Session::get('title')}}</strong><br/>
                                        <h5>{{ Session::get('status') }}</h5>
                                    </div>
                                @endif
                                    
                            </div>
        </div>
            <!--
                        </div>
                        <!--Akhir Panel Body Tables -->
                    </div>
                </div>
            </div>
            <!--Akhir Field Tables-->
        </div>
        <!--Akhir Page Utama -->
   
@endsection