@extends('layouts.master')

@section('title', 'Pemasok')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Edit Pemasok</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('pemasoks.update', $pemasok->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="nama_pemasok">Nama pemasok</label>
                                    <input type="text" class="form-control @error('nama_pemasok') has-error @enderror" id="nama_pemasok" name="nama_pemasok"
                                    placeholder="Nama pemasok" value="{{ $pemasok->nama_pemasok }}">
                                    @error('nama_pemasok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="no_hp">No HP</label>
                                    <input type="number" min="0" max="9999999999999" class="form-control" id="no_hp" name="no_hp"
                                    placeholder="No HP" value="{{ $pemasok->no_hp }}">
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection