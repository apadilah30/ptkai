@extends('Admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Data Aktivasi Perangkat</h2>
                <div class="page-breadcrumb">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">                            
                <div class="card-body">
                    @if(Auth::user()->level == "Admin")
                    <a href="{{ route('aktivasiper.create') }}" class="btn btn-primary">Tambah Aktivasi</a>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Seri Perangkat</th>
                                    <th>Nama Ruang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                            @foreach( $data as $r)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $r->perangkat->no_seri}}
                                    </td>
                                    <td>{{ $r->ruangan->nama }}</td>
                                    @if(Auth::user()->level == "Admin")
                                    <td>
                                        <a href="{{ route('aktivasiper.edit', $r->id) }}" class="btn btn-primary">Edit</a>
                                        <button onclick="deletes({{ $r->id }})" class="btn btn-danger">Delete</button>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<form action="" id="formDelete" method="get">
    @csrf

</form>

<script src="/assets/vendor/sweetalert/sweetalert.min.js"></script>

<script>
     function deletes(id){
        const formDelete = document.getElementById('formDelete')
        formDelete.action = '/aktivasiper/delete/'+id
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                formDelete.submit();
                Swal.fire(
                'Deleted!',
                'Data berhasil di hapus',
                'success'
                )
            }
        })
    }
</script>            
@endsection