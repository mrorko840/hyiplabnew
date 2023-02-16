@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two custom-data-table">
                            <thead>
                                <tr>
                                    <th>@lang('Name')</th>
                                    <th>@lang('Rate')</th>
                                    <th>@lang('Actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($allCurrency as $item)
                                    <tr>
                                        <td>{{ __($item->currency) }}</td>
                                        <td><strong>{{ __($item->rate) }}</strong></td>
                                        <td>
                                            <div class="button--group">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-sm btn-outline--primary ms-1 editBtn"
                                                    data-url="{{ route('admin.currency.edit', $item->id) }}"
                                                    data-cur="{{ json_encode($item->only('currency', 'rate')) }}">
                                                    <i class="la la-pen"></i> @lang('Edit')
                                                </a>
                                                @if ($item->id != 1)
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-question="@lang('Are you sure to remove this Currency from this system?')"
                                                        data-action="{{ route('admin.currency.delete', $item->id) }}">
                                                        <i class="la la-trash"></i> @lang('Remove')
                                                    </button>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>



    {{-- NEW MODAL --}}
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="createModalLabel"> @lang('Add New Currency')</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="las la-times"></i></button>
                </div>
                <form class="form-horizontal" method="post" action="{{ route('admin.currency.store') }}">
                    @csrf
                    <div class="modal-body">

                        <div class="row form-group">
                            <label>@lang('Currency Name')</label>
                            <div class="col-sm-12">
                                <input type="text" name="currency" value="{{ old('currency') }}" class="form-control"
                                    placeholder="{{ __('Enter Currency') }}" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label>@lang('Currency Rate')</label>
                            <div class="col-sm-12">
                                <input type="number" name="rate" class="form-control" value="{{ old('rate') }}"
                                    placeholder="{{ __('Enter currency Rate') }}" required>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary w-100 h-45" id="btn-save"
                            value="add">@lang('Submit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- EDIT MODAL --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editModalLabel">@lang('Edit Language')</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="las la-times"></i></button>
                </div>
                <form method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row form-group">
                            <label>@lang('Currency Name')</label>
                            <div class="col-sm-12">
                                <input type="text" name="currency" value="{{ old('currency') }}" class="form-control"
                                    placeholder="{{ __('Enter Currency') }}" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label>@lang('Currency Rate')</label>
                            <div class="col-sm-12">
                                <input type="text" name="rate" class="form-control" value="{{ old('rate') }}"
                                    placeholder="{{ __('Enter currency Rate') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary w-100 h-45" id="btn-save"
                            value="add">@lang('Submit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-confirmation-modal />
@endsection


@push('breadcrumb-plugins')
    <a class="btn btn-sm btn-outline--primary" data-bs-toggle="modal" data-bs-target="#createModal"><i
            class="las la-plus"></i>@lang('Add New')</a>
@endpush

@push('script')
    <script>
        (function($) {
            "use strict";
            $('.editBtn').on('click', function() {
                var modal = $('#editModal');
                var url = $(this).data('url');
                var cur = $(this).data('cur');

                console.log(cur);

                modal.find('form').attr('action', url);
                modal.find('input[name=currency]').val(cur.currency);
                modal.find('input[name=rate]').val(cur.rate);
                modal.modal('show');
            });
        })(jQuery);
    </script>
@endpush
