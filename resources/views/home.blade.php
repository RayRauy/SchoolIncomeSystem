@extends('layouts.app')

@section('content')
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ ('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center text-sm-start d-print-none">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12">
                <div class="card mb-0 rounded-bottom-0">
                    <div class="card-body">
                        <p class="text-muted mb-0">
                            ©
                            <script> document.write(new Date().getFullYear()) </script>
                            Overseas School Income System
                            <span
                                class="text-muted d-none d-sm-inline-block float-end">
                                Crafted with
                                <i class="iconoir-heart text-danger"></i>
                                by Our Team</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

@endsection
