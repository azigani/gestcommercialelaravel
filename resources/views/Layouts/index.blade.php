@extends('master')

@section('content')

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Gestion commerciale</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820"
               target="_blank"
               class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">
                Buy Now
            </a>
            <ol class="breadcrumb">
                <li><a href="template_html/index.html">Gestion</a></li>
                <li class="active">tableau de bord</li>
            </ol>
        </div>
    </div>

    <!-- Contenu dynamique -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="white-box">
                <div class="r-icon-stats">
                    <i class="ti-user bg-megna"></i>
                    <div class="bodystate">
                        <h4>370</h4>
                        <span class="text-muted">New Patient</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Répétez les blocs similaires ici -->
    </div>
</div>
@endsection
