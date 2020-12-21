@extends('Landing.template.app')
@section('content')

    <div class="content-wrapper">
      <div class="content-body">
        <div class="row match-height">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><i class="la la-bars">&nbsp;Form Pendaftaran</i></h4>
              </div>
              <hr>
              <div class="card-content collapse show">
                <div class="card-body">

                  <form class="form">
                    <div class="row justify-content-md-center">
                      <div class="col-md-6">
                        <div class="form-body">
                          <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" class="form-control round" name="fullname">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control round" name="email">
                          </div>

                          <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control round" name="phone">
                          </div>

                          <div class="form-group">
                            <label for="nama">Jenis Kelamin</label>
                            <div class="form-check form-check-inline mb-4">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="lakilaki">
                                        <label class="custom-control-label" for="lakilaki">Laki Laki</label>
                                    </div>
                                </div>
                            </div>
							
							<div class="form-check form-check-inline">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="perempuan">
                                        <label class="custom-control-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="alamat">Alamat Sekarang</label>
                            <input type="text" id="alamat" class="form-control round" name="alamat">
                          </div>

                          
                          <div class="form-group">
                            <label for="issueinput3">Provinsi</label>
                            <select id="issueinput3" name="state" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                              <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
                              <option value="bank">DKI Jakarta</option>
                              <option value="bank">Banten</option>
                              <option value="bank">Jawa Barat</option>
                              <option value="bank">Jawa Tengah</option>
                              <option value="bank">Jawa Timur</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="issueinput3">Kota</label>
                            <select id="issueinput3" name="city" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                              <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
                              <option value="bank">Jakarta</option>
                              <option value="bank">Tangerang</option>
                              <option value="bank">Depok</option>
                              <option value="bank">Bogor</option>
                              <option value="bank">Bandung</option>
                              <option value="bank">Surabaya</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="eventInput2">Zip COde</label>
                            <input type="number" id="eventInput2" class="form-control round" name="zip_code">
                          </div>

                          <div class="form-group">
                            <label for="eventInput2">No.Pendaftaran PPN</label>
                            <input type="text" id="eventInput2" class="form-control round" name="vat_reg_no">
                          </div>

                          <div class="form-group">
                            <label for="issueinput3">Nama cashier</label>
                            <select id="issueinput3" name="Cashier" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                              <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
                              <option value="bank">Cashier 1</option>
                              <option value="bank">Cashier 2</option>
                              <option value="bank">Cashier 3</option>
                            </select>
                          </div>

                          
                          <label for="issueinput3">Invoice Edit Period</label>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="number" id="issueinput3" class="form-control round" name="invoiceedit" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <select for="issueinput4" name="Minutes" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                                  <option value="none" disabled="">--- Silahkan Pilih ---</option>
                                  <option value="bank">Minutes</option>
                                  <option value="bank">Second</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <label for="issueinput3">Invoice Delete Period</label>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="number" id="issueinput3" class="form-control round" name="invoicedelete" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <select for="issueinput4" name="Minutes" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                                  <option value="none" disabled="">--- Silahkan Pilih ---</option>
                                  <option value="bank">Minutes</option>
                                  <option value="bank">Second</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="issueinput3">Halaman Setelah Menjual</label>
                            <select id="issueinput3" name="aftersellpage" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                              <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
                              <option value="bank">Titik Penjualan</option>
                              <option value="bank">Email Faktur</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="issueinput3">AyoPOS Printing</label>
                            <select id="issueinput3" name="posprinting" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                              <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
                              <option value="bank">Web Browser</option>
                            </select>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <label for="issueinput3">Receipt Printer</label>
                              <div class="form-group">
                                <select for="issueinput4" name="receiptprinter" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                                  <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
                                  <option value="bank">Canon Printer</option>
                                  <option value="bank">Epson Printer</option>
                                  <option value="bank">Hp Printer</option>
                                  <option value="bank">Mobile Bluetooth Printer</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="issueinput3">Auto Printer</label>
                                <select for="issueinput4" name="autoreceiptprinter" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                                  <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
                                  <option value="bank">Yes</option>
                                  <option value="bank">No</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="eventInput2">Stock Quantity</label>
                            <input type="number" id="eventInput2" class="form-control round" name="stockquantity">
                          </div>

                          <div class="form-group">
                            <label for="eventInput2">Item Display Limit</label>
                            <input type="number" id="eventInput2" class="form-control round" name="itemlimit">
                          </div>

                          <div class="form-group">
                            <label for="issueinput3">Efek Suara</label>
                            <select id="issueinput3" name="soundeffect" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                              <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
                              <option value="bank">On</option>
                              <option value="bank">Off</option>
                              <option value="bank">Custom</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="issueinput3">Status</label>
                            <select id="issueinput3" name="Status" class="countries form-control round" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                              <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
                              <option value="bank">Online</option>
                              <option value="bank">Offline</option>
                              <option value="bank">Custom</option>
                            </select>
                          </div>

                          <div class="form float-left">
                            <button type="submit" class="btn btn-info">
                              <i class="la la-floppy-o"></i>&nbsp;Simpan
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection