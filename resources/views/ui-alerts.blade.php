@extends('layouts.master')
@section('title')
    @lang('translation.Alerts')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') UI Elements @endslot
        @slot('title') Alerts @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Default Alerts</h4>
                    <p class="card-title-desc">Alerts are available for any length of
                        text, as well as an optional dismiss button. For proper styling, use one
                        of the four <strong>required</strong> contextual classes (e.g., <code
                            class="highlighter-rouge">.alert-success</code>). For inline
                        dismissal, use the alerts jQuery plugin.</p>

                    <div class="">
                        <div class="alert alert-primary" role="alert">
                            A simple primary alert—check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            A simple secondary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                            A simple success alert—check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert—check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                            A simple warning alert—check it out!
                        </div>
                        <div class="alert alert-info mb-0" role="alert">
                            A simple info alert—check it out!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Link color</h4>
                    <p class="card-title-desc">Use the <code class="highlighter-rouge">.alert-link</code> utility class to
                        quickly provide matching colored links within any alert.</p>

                    <div class="">
                        <div class="alert alert-primary" role="alert">
                            A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click
                            if you like.
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>
                        <div class="alert alert-success" role="alert">
                            A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click
                            if you like.
                        </div>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click
                            if you like.
                        </div>
                        <div class="alert alert-warning" role="alert">
                            A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click
                            if you like.
                        </div>
                        <div class="alert alert-info mb-0" role="alert">
                            A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                            you like.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Dismissing</h4>
                    <p class="card-title-desc">
                        Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding
                        to the right of the alert and positions the <code>.btn-close</code> button.
                    </p>

                    <div class="">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            A simple primary alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>


                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                            A simple secondary alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            A simple success alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            A simple danger alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            A simple warning alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
                            A simple info alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">With Icon</h4>


                    <div class="">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <i class="uil uil-user-circle me-2"></i>
                            A simple primary alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                            <i class="uil uil-pen me-2"></i>
                            A simple secondary alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="uil uil-check me-2"></i>
                            A simple success alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="uil uil-exclamation-octagon me-2"></i>
                            A simple danger alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <i class="uil uil-exclamation-triangle me-2"></i>
                            A simple warning alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                        <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
                            <i class="uil uil-question-circle me-2"></i>
                            A simple info alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Alert Border Examples</h4>
                    <p class="card-title-desc">Add <code>alert-border</code> class for Alert Border Examples and add
                        <code>alert-border-*</code> color classes for border color variant</p>

                    <div class="">
                        <div class="alert alert-border alert-border-primary alert-dismissible fade show" role="alert">
                            <i class="uil uil-user-circle text-primary font-size-16 me-2"></i>
                            A simple border primary alert
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                        <div class="alert alert-border alert-border-secondary alert-dismissible fade show" role="alert">
                            <i class="uil uil-pen font-size-16 text-secondary me-2"></i>
                            A simple border secondary alert
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                        <div class="alert alert-border alert-border-success alert-dismissible fade show" role="alert">
                            <i class="uil uil-check font-size-16 text-success me-2"></i>
                            A simple border success alert
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                        <div class="alert alert-border alert-border-danger alert-dismissible fade show" role="alert">
                            <i class="uil uil-exclamation-octagon font-size-16 text-danger me-2"></i>
                            A simple border danger alert
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                        <div class="alert alert-border alert-border-warning alert-dismissible fade show" role="alert">
                            <i class="uil uil-exclamation-triangle font-size-16 text-warning me-2"></i>
                            A simple border warning alert
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                        <div class="alert alert-border alert-border-info alert-dismissible fade show mb-0" role="alert">
                            <i class="uil uil-question-circle font-size-16 text-info me-2"></i>
                            A simple border info alert
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Alert Examples</h4>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="alert alert-success alert-dismissible fade show mt-4 px-4 mb-0 text-center"
                                role="alert">
                                <i class="uil uil-check-circle d-block display-4 mt-2 mb-3 text-success"></i>
                                <h5 class="text-success">Success</h5>
                                <p>A simple success alert</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                </button>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="alert alert-danger alert-dismissible fade show mt-4 px-4 mb-0 text-center"
                                role="alert">
                                <i class="uil uil-exclamation-octagon d-block display-4 mt-2 mb-3 text-danger"></i>
                                <h5 class="text-danger">Error</h5>
                                <p>A simple danger alert</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                </button>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="alert alert-border alert-border-warning alert-dismissible fade show mt-4 px-4 mb-0 text-center"
                                role="alert">
                                <i class="uil uil-exclamation-triangle d-block display-4 mt-2 mb-3 text-warning"></i>
                                <h5 class="text-warning">Warning</h5>
                                <p>A simple warning alert</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                </button>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="alert alert-border alert-border-info alert-dismissible fade show mt-4 px-4 mb-0 text-center"
                                role="alert">
                                <i class="uil uil-question-circle d-block display-4 mt-2 mb-3 text-info"></i>
                                <h5 class="text-info">Info</h5>
                                <p>A simple Info alert</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
