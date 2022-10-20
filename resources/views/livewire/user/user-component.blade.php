<div>
    @extends('layouts/contentNavbarLayout')

    @section('title', 'Account settings - Account')

    @section('page-script')
    <script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
    @endsection

    @section('content')
    <h4 class="fw-bold py-3 mb-4">Akun</h4>

    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Detail Profil</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded"
                            height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Unggah foto</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden
                                    accept="image/png, image/jpeg" />
                            </label>
                            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-md-3">
                                <label for="username" class="form-label">Username</label>
                                <input wire:model="username" class="form-control" type="text" id="username"
                                    name="username" value="{{ $user->username }}" />
                                @error('username')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input wire:model="name" class="form-control" type="text" id="name" name="name"
                                    value="{{ $user->name }}" />
                                @error('name')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phone">Nomor Handphone</label>
                                <div class="input-group input-group-merge">
                                    <input wire:model="phone" type="text" class="form-control" id="phone" name="phone"
                                        value="{{ $user->phone }}" />
                                    @error('phone')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input wire:model="email" class="form-control" type="text" id="email" name="email"
                                    value="{{ $user->email }}" />
                                @error('email')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Alamat</label>
                                <textarea class="form-control" name="address" id="address" cols="20"
                                    rows="5">{{ $user->address }}</textarea>
                                @error('address')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <button type="reset" class="btn btn-outline-secondary">Batal</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <h5 class="card-header">Hapus Akun</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading fw-bold mb-1">Apakah Anda yakin ingin menghapus akun Anda?</h6>
                            <p class="mb-0">Setelah Anda menghapus akun Anda, tidak ada jalan untuk kembali.</p>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="accountActivation"
                                id="accountActivation" />
                            <label class="form-check-label" for="accountActivation">Saya konfirmasi hapus akun
                                saya</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Hapus Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>