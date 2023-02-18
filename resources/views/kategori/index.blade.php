@extends('layouts.master')

@section('title')
    Kategori
@endsection

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item active">Dashboard</div>
@endsection

@section ('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>@yield('title')</h1>
        <div class="section-header-breadcrumb">
            @section('breadcrumb')
          <div class="breadcrumb-item active"><a href="{{url('/')}}">Home</a></div>
          @show
      </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <button class="btn btn-success btn-xs" onclick="addForm('{{ route('kategori.store') }}')"><i class="far fa-edit"></i>Tambah</button>
              </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                          <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                        </div>
                      </th>
                      <th width="5%">No</th>
                      <th>Kategori</th>
                      <th>Progress</th>
                      <th>Members</th>
                      <th>Due Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@includeIf('kategori.form')
@endsection
@push('scripts')
    <script>
        let table;

        $(function () {
        table = $('.table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('kategori.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'nama_kategori'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
        });

        $('#modal-form').validator().on('submit', function (e) {
            if (! e.preventDefault()) {
                $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                    .done((response) => {
                        $('#modal-form').modal('hide');
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menyimpan data');
                        return;
                    });
            }
        });
    });

    function addForm(url){
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Kategori');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=nama_kategori]').focus()
    }

    function editForm(url){
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Kategori');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama_kategori]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_kategori').val(response.nama_kategori);
            })
            .fail((errors) => {
                alert('Tidak dapat menyimpan data');
                return;
            })
    }

    function deleteData(url) {
        if (confirm('Yakin ingin menghapus data terpilih?')) {
            $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
        }
    }
    </script>
@endpush
