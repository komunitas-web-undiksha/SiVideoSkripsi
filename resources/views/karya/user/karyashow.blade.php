@extends('layouts.Main')

@section('judul', 'Tabel')

@section('konten')
<h3 class="text-dark mb-4">Karya Mahasiswa</h3>
<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 font-weight-bold">List Karya</p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 text-nowrap">
                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select
                            class="form-control form-control-sm custom-select custom-select-sm">
                            <option value="10" selected="">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>&nbsp;</label></div>
            </div>
            <div class="col-md-6">
                <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search"
                            class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label>
                </div>
            </div>
        </div>
        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table dataTable my-0" id="dataTable">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Judul Karya</th>
                        <th>Directory Karya</th>
                        <th>Trailer</th>
                        <th>Directory Karya Edit</th>
                        <th>Jenis</th>
                        <th>Haki</th>
                        <th>Do Haki</th>
                        <th>Publish</th>
                        <th>Created at</th>
                        <th>Ipadate at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listKarya as $list)
                    <tr>
                        <td>{{ $list->nim }}</td>
                        <td>{{$list->judul}}</td>
                        <td>{{$list->directory_karya}}</td>
                        <td>{{$list->directory_trailer}}</td>
                        <td>{{$list->directory_karya_edit}}</td>
                        <td>{{$list->jenis}}</td>
                        <td>{{$list->haki}}</td>
                        <td>{{$list->do_haki}}</td>
                        <td>{{$list->publish}}</td>
                        <td>{{$list->created_at}}</td>
                        <td>{{$list->updated_at}}</td>
                    </tr>
                    </tfoot>
                    @endforeach
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27
                </p>
            </div>
            <div class="col-md-6">
                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span
                                    aria-hidden="true">«</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                    aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection