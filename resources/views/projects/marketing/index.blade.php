@extends('layouts.main')
@section('page-title')
    {{ $project->name . __(' Marketing Material') }}
@endsection
@section('page-breadcrumb')
    {{ $project->name . __(' Marketing Material') }}
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
    <style>
        .modal-dialog {
            max-width: 670px;
        }

        .icon-box-card .card {
            width: 100%;
            max-width: 300px;
            min-width: 200px;
            height: 250px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.24);
            border: 2px solid rgba(7, 7, 7, 0.12);
            font-size: 16px;
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .icon {
            margin: 0 auto;
            width: 100%;
            height: 80px;
            max-width: 80px;
            background: linear-gradient(90deg, rgba(255,227,141,1) 0%, rgba(186,136,89,1) 40%, rgba(0, 0, 0, 0.28) 60%);
            border-radius: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            transition: all 0.8s ease;
            background-position: 0px;
            background-size: 200px;
        }

        .icon-box-card .card .title {
            width: 100%;
            margin: 0;
            text-align: center;
            margin-top: 30px;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        .icon-box-card .card .text {
            width: 80%;
            margin: 0 auto;
            font-size: 13px;
            text-align: center;
            margin-top: 20px;
            color: white;
            font-weight: 200;
            letter-spacing: 2px;
            opacity: 0;
            max-height: 0;
            transition: all 0.3s ease;
        }

    

        .icon-box-card .card:hover .text {
            transition: all 0.3s ease;
            opacity: 1;
            max-height: 40px;
        }

        .icon-box-card .card:hover .icon {
            background-position: -120px;
            transition: all 0.3s ease;
        }

        .icon-box-card .card:hover .icon i {
            background: linear-gradient(45deg, rgba(255,227,141,1) 16%, rgba(186,136,89,1) 72%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            opacity: 1;
            transition: all 0.3s ease;
        }
    </style>
@endpush
@section('page-action')
    <div>
        @stack('project_template_button')
    </div>
@endsection
@section('content')
    <section class="section mt-5">
        <div class="filters-content">
            <div class="row  d-flex grid">
                @isset($folders)
                    @foreach ($folders as $folder)
                        <div class="col-sm-12 col-lg-4">
                            <div class="content icon-box-card">
                                <div class="card">
                                    <div class="icon">
                                        @if ($folder->folder_type == 'images')
                                        <i class="fa-regular fa-image fs-1"></i>
                                        @else
                                        <i class="far fa-file-pdf fs-1"></i>
                                        @endif
                                    </div>
                                  <a href="{{ route('folder.files', [$folder->id]) }}"><p class="title">{{ $folder->name }}</p></a>  
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                           
                                        <div class="action-btn btn-primary ms-2">
                                            <a class="action-btn btn-primary mx-1  btn btn-sm d-inline-flex align-items-center" data-size="lg"
                                                data-title="{{ __('Download') }}"
                                                href="{{ route('folder.download.zip', [$folder->id]) }}"
                                                data-toggle="tooltip"
                                                title="{{ __('Download') }}"><i
                                                    class="ti ti-download text-white"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset


                @auth('web')
                    @if (Auth::user()->type == 'company')
                        @can('project create')
                            <div class="col-lg-4 All Ongoing Finished OnHold">
                                <a href="#" class="btn-addnew-project " style="padding: 90px 10px;" data-ajax-popup="true"
                                    data-size="md" data-title="{{ __('Create New Folder') }}"
                                    data-url="{{ route('folder.create', [$project->id]) }}">
                                    <div class="bg-primary proj-add-icon">
                                        <i class="ti ti-plus"></i>
                                    </div>
                                    <h6 class="mt-4 mb-2">{{ __('Add Folder') }}</h6>
                                    <p class="text-muted text-center">{{ __('Click here to add New Folder') }}</p>
                                </a>
                            </div>
                        @endcan
                    @endif
                @endauth

            </div>
        </div>

    </section>
@endsection
