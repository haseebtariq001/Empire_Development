@extends('layouts.main')
@section('page-title')
    {{ $folder->project->name . __(' Marketing Material') }}
@endsection
@section('page-breadcrumb')
    {{ $folder->project->name . __(' Marketing Material') }} > {{ $folder->name }}
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
@endpush
@section('page-action')
    <div>
        @stack('project_template_button')

        @if (Auth::user()->type == 'company')
            <a class="btn btn-sm btn-primary" data-size="md" data-title="{{ __('Back') }}" data-toggle="tooltip"
                href="javascript:void(0);" onclick="window.history.back()" title="{{ __('Back') }}">
                <i class="fa-solid fa-arrow-rotate-left"></i>
            </a>
            @can('project create')
                <a class="btn btn-sm btn-primary" data-ajax-popup="true" data-size="md" data-title="{{ __('Upload Files') }}"
                    data-url="{{ route('folder.files.create', [$folder->id]) }}" data-toggle="tooltip"
                    title="{{ __('Upload') }}">
                    <i class="ti ti-upload"></i>
                </a>
            @endcan
            <a class="btn btn-sm btn-primary" data-size="md" data-title="{{ __('Folder') }}"
                href="{{ route('project.downloads', [$folder->project->slug]) }}" data-toggle="tooltip"
                title="{{ __('Folder') }}">
                <i class="ti ti-eye"></i>
            </a>
        @endif
    </div>
@endsection
@section('content')
    <section class="section mt-5">
        <div class="filters-content">
            <div class="row  d-flex grid">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card milestone-card">
                                {{-- <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="mb-0">{{ __('Files') }} ({{ $files->count() }})</h5>
                                        </div>
                                        <div class="float-end d-flex">
                                            <p class="text-muted d-sm-flex align-items-center mb-0 me-3">
                                                <a href="{{ route('project.units.grid.view', [$project->id]) }}"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-original-title="{{ __('Grid View') }}"
                                                    class="btn btn-sm btn-primary btn-icon ">
                                                    <i class="ti ti-layout-grid"></i>
                                                </a>
                                            </p>
                                            @can('project create')
                                                @if (Auth::user()->type == 'company')
                                                    <p class="text-muted d-sm-flex align-items-center mb-0 me-3">
                                                        <a class="btn btn-sm btn-primary" data-size="lg"
                                                            data-ajax-popup="true" data-title="{{ __('Create Unit') }}"
                                                            data-url="{{ route('project.unit.create', [$project->slug]) }}"
                                                            data-toggle="tooltip" title="{{ __('Create Unit') }}"><i
                                                                class="ti ti-plus"></i></a>
                                                    </p>
                                                    <p class="text-muted d-sm-flex align-items-center mb-0 me-3">
                                                        <a href="#" class="btn btn-sm btn-primary btn-icon"
                                                            data-ajax-popup="true" data-title="{{ __('Unit Import') }}"
                                                            data-url="{{ route('unit.import', [$project->id]) }}"
                                                            data-toggle="tooltip" title="{{ __('Import') }}"><i
                                                                class="ti ti-file-import"></i>
                                                        </a>
                                                    </p>
                                                @endif
                                            @endcan

                                            <p class="text-muted d-sm-flex align-items-center mb-0">
                                                <a href="#" class="btn btn-sm btn-primary btn-icon"
                                                    data-ajax-popup="true" data-title="{{ __('Unit Export') }}"
                                                    data-url="{{ route('unit.export', [$project->id]) }}"
                                                    data-toggle="tooltip" title="{{ __('Export') }}"><i
                                                        class="ti ti-file-export"></i>
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div> --}}
                                <div class="card-body table-border-style">
                                    <div class="table-responsive">
                                        <table class="table mb-0 pc-dt-simple" id="users">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('File Name') }}</th>
                                                    <th>{{ __('Action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($childFolders->isNotEmpty())
                                                    @foreach ($childFolders as $childFolder)
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('folder.files', [$childFolder->id]) }}">
                                                                    <i class="fas fa-folder"></i> {{ $childFolder->name }}
                                                                </a>
                                                            </td>
                                                            <td> </td>
                                                        </tr>
                                                    @endforeach
                                                @endif

                                                @foreach ($files as $file)
                                                    <tr>
                                                        <td> {{ $file->name }} </td>

                                                        <td class="col-auto">
                                                            <div class="action-btn bg-primary ms-2">
                                                                <a class="mx-3 btn btn-sm align-items-center"
                                                                    href="{{ get_file($file->file_path) }}" download>
                                                                    <i class="ti ti-download text-white"></i>
                                                                </a>
                                                            </div>
                                                            <div class="action-btn bg-secondary ms-2">
                                                                <a class="mx-3 btn btn-sm align-items-center"
                                                                    href="{{ get_file($file->file_path) }}"
                                                                    target="_blank">
                                                                    <i class="ti ti-crosshair text-white"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="{{ __('Preview') }}"></i>
                                                                </a>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
