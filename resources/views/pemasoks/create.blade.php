@extends('layouts.master')

@section('title', 'Pemasok')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Create Pemasok</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('pemasoks.store') }}" method="POST">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="nama_pemasok">Nama Pemasok</label>
                                    <input type="text" class="form-control @error('nama_pemasok') has-error @enderror" id="nama_pemasok" name="nama_pemasok"
                                        placeholder="Nama Pemasok">
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
                                        placeholder="No HP">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
