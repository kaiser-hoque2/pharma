@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')
    <div class="wrapper">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Invoice</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">invoice</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <div class="ms-auto"><a href="{{ route('purchase.create') }}"
                                    class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="mb-0 text-uppercase">Sale</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div id="invoice">
                            <div class="toolbar hidden-print">
                                <div class="text-end">
                                    <button type="button" onclick="window.print()" class="btn btn-dark"><i class="fa fa-print"></i> Print</button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>     Export as PDF
                                    </button>
                                </div>
                                <hr />
                            </div>
                            <div class="invoice overflow-auto">
                                <div style="min-width: 600px">
                                    <header>
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <img src="assets/images/logo-icon.png" width="80" alt="" />
                                                </a>
                                            </div>
                                            <div class="col company-details">
                                                <h2 class="name">
                                                    <a target="_blank" href="javascript:;" class="text-dark">
                                                        Pharma
                                                    </a>
                                                </h2>
                                                <div>455 Foggy Heights, AZ 85004, BD</div>
                                                <div>(123) 456-789</div>
                                                <div>pharma@gmail.com</div>
                                            </div>
                                        </div>
                                    </header>
                                    <main>
                                        <div class="row contacts">
                                            <div class="col invoice-to">
                                                <div class="text-gray-light">INVOICE TO:</div>

													<span>Customer Name: <b>{{ $sale->customer->name }}</b></span><br>
													<span>Reference No: {{ $sale->reference_no }}</span><br>
													
													 

                                            </div>
                                            <div class="col invoice-details">
                                                <div class="date">Date of Invoice: {{ date('d/m/Y') }}</div>
                                               <span>Sales Date: {{ $sale->sale_date }}</span>
                                            </div>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead >
                                               <tr class="borderd">
													<th>Medicine Name</th>
													<th>Quantity</th>
													<th>Unit Price</th>
													<th>VAT</th>
													<th>Discount</th>
													<th>Subtotal</th>
												</tr>
                                            </thead>
                                            <tbody>


												@foreach ($saleDetails as $sd)
													<tr>
														<td>{{ $sd->medicine->bname}}</td>
														<td>{{ $sd->quantity }}</td>
														<td>{{ $sd->unit_price }}</td>
														<td>{{ $sd->tax }} {{ $sd->discount_type==0?"%":"BDT"}}</td>
                                                        <td>{{ $sd->discount }}{{ $sd->discount_type==0?"%":"BDT"}}</td>
														<td>{{ $sd->sub_amount }}</td>
													</tr>
												@endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">Sub Amount:</td>
                                                    <td>  {{$sale->sub_amount}}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">TAX </td>
                                                    <td> {{$sale->tax}}%</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2">Discount:</td>
                                                    <td>{{ $sd->discount }}{{ $sd->discount_type==0?"%":"BDT"}}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="2" clsass="text-dark">GRAND TOTAL</td>
                                                    <td> {{$sale->grand_total}}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="thanks">Thank you!</div>

                                    </main>
                                    <footer>Invoice was created on a computer and is valid without the signature and seal.
                                    </footer>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- ================ --}}
            <style>
                .action-buttons {
                    width: 1%;
                    white-space: nowrap;
                }

                .button-container {
                    display: flex;
                    gap: 10px;
                }
            </style>

        </div>
        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2023. All right reserved.</p>
        </footer>
    </div>

    </div>

@endsection
