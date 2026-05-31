@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-5">
            <div class="card shadow-sm border-0">
                <div class="card-body p-5">

                    <div class="text-center mb-4">
                        <div class="bg-dark rounded-3 d-inline-flex p-2 mb-3">
                            <i class="bi bi-person text-white fs-4"></i>
                        </div>
                        <h5 class="fw-semibold">Buat akun baru</h5>
                        <p class="text-muted small">Isi data diri kamu di bawah ini</p>
                    </div>

                    <form>
                        <div class="mb-3">
                            <label class="form-label small text-muted">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small text-muted">Email</label>
                            <input type="email" class="form-control" placeholder="nama@email.com">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small text-muted">Password</label>
                            <input type="password" class="form-control" placeholder="••••••••">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small text-muted">Konfirmasi Password</label>
                            <input type="password" class="form-control" placeholder="••••••••">
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-dark">Buat Akun</button>
                        </div>

                        <p class="text-center text-muted small mt-3">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="text-dark fw-semibold">Masuk disini</a>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection