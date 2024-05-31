@extends('layouts.main')
@section('page-title')
{{ __('Dashboard')}}
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
    <style>
        .modal-dialog {
            max-width: 670px;
        }
    </style>
@endpush
@section('page-action')
    <div>
        @stack('project_template_button')
    
        @if (Auth::user()->type == 'company')

        @can('project create')
            <a class="btn btn-sm btn-primary" data-ajax-popup="true" data-size="md" data-title="{{ __('Create New Project') }}"
                data-url="{{ route('empire-projects.create') }}" data-toggle="tooltip" title="{{ __('Create') }}">
                <i class="ti ti-plus"></i>
            </a>
        @endcan
    @endif
    </div>
@endsection
@section('content')
    <section class="section mt-5">
        <div class="filters-content">
            <div class="row  d-flex grid">
                @isset($projects)
                    @foreach ($projects as $project)
                        <div class="col-sm-12 col-lg-4">
                            <div class="card box-shadow mx-auto project-card">
                                <img src="{{ get_file($project->image_file) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> {{ $project->name }} </h5>
                                    <hr>
                                    <div class="card-text d-flex justify-content-between align-items-center">
                                        {{-- <a class="link-text" href="#">Marketing Material</a> --}}
                                      @if (Auth::user()->type == 'company')
                                      @can('project edit')
                                          <a class="btn btn-primary text-dark" data-ajax-popup="true" data-size="lg"
                                              data-title="{{ __('Edit Project') }}"
                                              data-url="{{ route('empire-projects.edit', [$project->id]) }}">
                                              <span>{{ __('Edit') }}</span>
                                          </a>
                                      @endcan
                                          
                                      @endif
                                        <a href="{{ route('empire-projects.show', [$project->id] ) }}" class="btn btn-light">View</a>
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
                                data-size="md" data-title="{{ __('Create New Project') }}"
                                data-url="{{ route('empire-projects.create') }}">
                                <div class="bg-primary proj-add-icon">
                                    <i class="ti ti-plus"></i>
                                </div>
                                <h6 class="mt-4 mb-2">{{ __('Add Project') }}</h6>
                                <p class="text-muted text-center">{{ __('Click here to add New Project') }}</p>
                            </a>
                        </div>
                    @endcan
                @endif
                @endauth

            </div>
        </div>

    </section>
@endsection
