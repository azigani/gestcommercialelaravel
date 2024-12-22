@extends('master')

@section('content')

<div class="container-fluid">
    <!-- En-tête et navigation -->
    <div class="row bg-title">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4 class="page-title">Gestion commerciale</h4>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-end">
            <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820"
               target="_blank"
               class="btn btn-danger btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">
                Acheter maintenant
            </a>
        </div>
        <div class="col-xs-12">
            <ol class="breadcrumb">
                <li><a href="layouts/index">Gestion</a></li>
                <li class="active">Tableau de bord</li>
            </ol>
        </div>
    </div>

    <!-- Statistiques principales -->
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <div class="r-icon-stats">
                    <i class="ti-user bg-megna"></i>
                    <div class="bodystate">
                        <h4>370</h4>
                        <span class="text-muted">Catégorie la plus demandée</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <div class="r-icon-stats">
                    <i class="ti-wallet bg-success"></i>
                    <div class="bodystate">
                        <h4>$8,540</h4>
                        <span class="text-muted">Total des ventes</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <div class="r-icon-stats">
                    <i class="ti-calendar bg-info"></i>
                    <div class="bodystate">
                        <h4>52</h4>
                        <span class="text-muted">Commandes en attente</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <div class="r-icon-stats">
                    <i class="ti-star bg-warning"></i>
                    <div class="bodystate">
                        <h4>128</h4>
                        <span class="text-muted">Produits favoris</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphiques ou contenu dynamique -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Tendances des ventes</h3>
                <div id="morris-area-chart1" style="height: 300px;"></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Revenus par catégorie</h3>
                <div id="morris-area-chart2" style="height: 300px;"></div>
            </div>
        </div>
    </div>
</div>

@endsection
