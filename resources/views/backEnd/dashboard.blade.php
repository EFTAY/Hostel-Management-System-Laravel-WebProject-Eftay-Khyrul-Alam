 @extends('layouts.backEnd.master')
 @section('content')
 <div class="card-box col-md-12 pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h1 style="text-align: center">
                You Are Logged in an Admin Pannel.
            </h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <div id="chart"></div>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0">Hostel Meal</div>
                    <div class="weight-600 font-14">January</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <div id="chart2"></div>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0">Total Students</div>
                    <div class="weight-600 font-14">2022</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <div id="chart3"></div>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0">2023</div>
                    <div class="weight-600 font-14">March</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mb-30">
        <div class="card-box height-100-p widget-style1">
            <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                    <div id="chart4"></div>
                </div>
                <div class="widget-data">
                    <div class="h4 mb-0">2023</div>
                    <div class="weight-600 font-14">April</div>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection