<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">                            
                <div class="card-body">
                    <a href="{{ route('add.kirim.alarm') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>E Mail Tujuan</th>
                                    <th>Custom Teks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                            @foreach( $kirimalarm as $r)
                            <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $r->operator->email }}</td>
                                    <td>{{ $r->custom_teks }}</td>
                                    <td>
                                        <a href="/edit_kirim_alarm/{{ $r->id }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                        <button onclick="deletes({{ $r->id }})" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
