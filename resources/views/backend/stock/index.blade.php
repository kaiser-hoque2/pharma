@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')




    <div class="wrapper">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">{{ __('Tables') }}</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Stock Data Table') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <h6 class="mb-0 text-uppercase">{{ __('Stock Data table') }}</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>{{ __('SL') }}</th>
                                        <th>{{ __('Medicine Name') }}</th>


                                        <th>{{ __('Quantity') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
    @forelse($stock as $p)
        <tr>
            <td>{{ ++$loop->index }}</td>
            <td class="text-center">{{ $p->bname }}</td>
            <td class="text-center">
                {{ $p->balance }}
                <span class="ml-2 @if($p->balance < 5) text-danger @else text-success @endif">
                    @if($p->balance < 5)
                        <br>(Low Stock)
                    @else
                        <br>(Stock Normal)
                    @endif
                </span>
            </td>
        </tr>
    @empty
        <tr>
            <th colspan="6" class="text-center">{{ __('No Dose Found') }}</th>
        </tr>
    @endforelse
</tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <footer class="page-footer">
            <p class="mb-0">{{ __('Copyright © 2023. All right reserved.') }}</p>
        </footer>
    </div>
    </div>
    <script src="assets/js/app.js"></script>

    </html>

@endsection
