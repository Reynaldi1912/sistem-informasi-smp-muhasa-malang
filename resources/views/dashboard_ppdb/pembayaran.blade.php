@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Pembayaran PPDB</h4>
        </div>
    </div>   
</div>
<div class="container bg-white border p-3">
    <p>Isikan Data Sesuai Dengan Data Pembayaran Yang Valid !</p>
    <h5>Form Pembayaran</h5>
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <h6 class="text-muted">ID PENDAFTARAN</h6>
                <input type="text" class="form-control pl-2" value="{{ Auth::user()->id }}" disabled>
                
                <h6 class="text-muted mt-3">GELOMBANG PENDAFTARAN</h6>
                <input type="text" class="form-control pl-2" value="{{$listUser->nama_gelombang}}" disabled>

                <h6 class="text-muted">BIAYA</h6>
                <input class="form-control pl-2" value="Rp. {{ number_format($listUser->biaya,2,',','.')}}" disabled>
                
                <h6 class="text-muted mt-5">JUMLAH PEMBAYARAN ANDA</h6>
                <input type="text" class="form-control" placeholder="Masukan Jumlah Pembayaran" required> 

                <h6 class="text-muted mt-3">BUKTI PEMBAYARAN</h6>
                <div class="card-body">
                    <!-- <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="assets/plugins/dropify/images/test-image-1.jpg" /> -->
                    <input type="file" id="input-file-now-custom-1" class="dropify" required/>
                </div>
                @if($listUser->id_gelombang != null)
                    <button type="submit" class="btn btn-success btn-raised btn-block">Simpan</button>
                @else
                    <p class="text-danger">Silahkan Hubungi Admin Jika Gelombang Pendaftaran Belum Terdaftar Pada Akun</p>
                    <button class="btn btn-secondary btn-raised btn-block" disabled>Simpan</button>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection