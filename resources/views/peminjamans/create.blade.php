@extends('layouts.main')
  
@section('container')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
            <div class="card-header">
                    <h2>Peminjaman Laptop
                        <a href="{{ route('peminjaman.index') }}" class="btn btn-primary float-end"> back </a>
                    </h2>
                </div>
                <div class="card-body">
                    <div class="pull-right">
                    <form action="{{ route('peminjaman.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf

                        <div class="form-group mt-3">
                            <strong>NIS :</strong>
                            <input type="number" class="form-control mt-2" name="nis" >
                        
                        </div>
                        
                        <div class="form-group mt-3">
                          <strong>No Laptop :</strong>
                            <select class="form-control mt-2" name="no_laptop">
                                     <option value="01">01</option>
                                     <option value="02">02</option>
                                     <option value="03">03</option>
                                     <option value="04">04</option>
                                     <option value="05">05</option>
                                     <option value="06">06</option>
                                     <option value="07">07</option>
                                     <option value="08">08</option>
                                     <option value="09">09</option>
                                     <option value="10">10</option>
                                     <option value="11">11</option>
                                     <option value="12">12</option>
                                     <option value="13">13</option>
                                     <option value="14">14</option>
                                     <option value="15">15</option>
                              </select>
                         </div>

                        <div class="form-group mt-3">
                            <strong>Nama Peminjam :</strong>
                            <input type="text" class="form-control mt-2" name="nama_peminjaman" placeholder="Nama Peminjam">
                        
                        </div>               
                        <div class="form-group mt-3">
                          <strong>Tanggal Peminjaman :</strong>
                             <input class="form-control mt-2" type="datetime-local" id="meeting-time"name="tanggal_peminjaman" value="2018-06-12T"min="2018-06-07T00:00" max="2040-06-14T 00:00">
                        
                        </div>

                        <button type="submit" class="btn btn-md btn-primary mt-3">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning mt-3">RESET</button>
                    </form > 
                </div >
            </div>
        </div>
    </div>   
</div>
@endsection

