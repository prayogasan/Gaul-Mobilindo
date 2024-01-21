<div class="container">
    <div class="card card-custom">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <div class="input-icon input-icon-right">
                            <input type="search" class="form-control" placeholder="Search..." wire:model='search' />
                            <span><i class="flaticon2-search-1 icon-md"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-8 text-right">
                    <div wire:loading wire:target="openUpdateModal">
                        <div class="spinner-border text-danger spinner-border-sm" role="status">
                        </div>
                    </div>
                    <div wire:loading wire:target="openDeleteModal">
                        <div class="spinner-border text-danger spinner-border-sm" role="status">
                        </div>
                    </div>
                    <a href="" type="button" class="btn btn-primary"><i class="flaticon2-add-1"></i><strong>
                            Tambah
                            Mobil</strong></a>
                </div>
            </div>
            <div class="table-responsive row">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Mobil</th>
                            <th>Jenis Mobil</th>
                            <th>Tahun Mobil</th>
                            <th>Warna</th>
                            <th>Status</th>
                            @if (Auth::user()->role == 'ADMIN')
                                <th>Detail</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            @if (Auth::user()->role == 'ADMIN')
                                <td></td>
                            @endif
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex align-items-center py-3">
                        <div class="d-flex align-items-center">
                            <span class="text-muted mr-2">Show</span>
                        </div>

                        <select wire:model='entries'
                            class="form-control form-control-sm font-weight-bold mr-4 border-0 bg-light"
                            style="width: 75px;">
                            <option value="5" selected>5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="text-muted"> of </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
