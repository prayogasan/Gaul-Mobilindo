<div class="container">
    <div class="card card-custom">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <a href="{{ route('admin.staff.index') }}"><i class="flaticon2-back icon-xm text-danger">
                            Kembali</i></a>
                </div>
            </div>

            <h2 class="text-dark mt-10"><strong> New Client </strong></h2>

            <div class="row align-items-center mt-7">
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="pelanggan">Nama</label>
                        <input type="text" class="form-control" placeholder="Cth. JKT-01" wire:model='name' />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="id_kontrak"> Umur </label>
                        <input type="text" class="form-control" placeholder="Cth. JKT-01" wire:model='age' />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="id_kontrak">Email</label>
                        <input type="text" class="form-control" placeholder="Cth. JKT-01" wire:model='email' />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="id_kontrak">Password </label>
                        <input type="password" class="form-control" placeholder="Cth. JKT-01" wire:model='password' />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="id_kontrak"> Tipe Akun </label>
                        <input type="text" value="STAFF" class="form-control" disabled>                    </div>
                </div>

            </div>

            <div class="justify-content-between mt-6">
                <button wire:click='store' wire:loading.attr="disabled" class="btn btn-danger mr-2">
                    <div wire:loading wire:target='store' class="spinner-border text-light spinner-border-sm"
                        role="status">
                    </div> Buat client
                </button>
                <a href="{{ route('admin.staff.index') }}" class="btn text-danger">
                    Batal
                </a>
            </div>
        </div>
    </div>
</div>
