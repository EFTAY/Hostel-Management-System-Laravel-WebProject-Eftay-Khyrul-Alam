@extends('layouts.frontEnd.master')
@push('css')
@endpush
@section('content')
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('meal.find') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <h4 class="p-2 text-center">Select a Date:</h4>
                            {{-- <label for="">Select a Date:</label> --}}
                            <input type="date" class="form-control" name="date"
                                value="{{ Carbon\Carbon::now()->addDay(2)->format('Y-m-d') }}">
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success float-right">Find Meal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if (Request::routeIs('meal.find'))
            <div class="row">
                <div class="col-md-12">
                    <h4 class="p-2 text-center">Reserved Meals</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Meal Type</th>
                                <th>Meal Items</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mealList as $item)
                                <tr>
                                    <td>{{ $item->mealDay }}</td>
                                    <td>{{ $item->mealType }}</td>
                                    <td>{{ $item->mealItems }}</td>
                                    <td>{{ $item->mealPrice }}</td>
                                    <td>
                                        <button class="btn btn-success btn-sm bookButton">book</button>
                                        <button class="btn btn-danger btn-sm reduceMeal">reduce</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <form action="{{ route('meal.store') }}" method="post">
                    @csrf
                        <input type="hidden" name="studentID" value="{{ session()->get('studentID') }}">
                        <input type="hidden" name="date" value="{{ $date }}">
                        <h4 class="p-2 text-center">Purchase Meals</h4>
                        <table class="table table-striped">
                            <tbody id="mealBookTable">
                                <thead>
                                    <tr>
                                        <th>Meal Type</th>
                                        <th>Meal Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>BreakFast:</td>
                                    <td><input type="number" name="breakFastUnit" class="form-control" value="0" readonly>
                                    </td>
                                    <td><input type="number" name="breakFastPrice" class="form-control" value="0"
                                            readonly></td>
                                </tr>
                                <tr>
                                    <td>Lunch:</td>
                                    <td><input type="number" name="lunchUnit" class="form-control" value="0" readonly>
                                    </td>
                                    <td><input type="number" name="lunchPrice" class="form-control" value="0" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dinner:</td>
                                    <td><input type="number" name="dinnerUnit" class="form-control" value="0" readonly>
                                    </td>
                                    <td><input type="number" name="dinnerPrice" class="form-control" value="0" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Comments:</td>
                                    <td colspan="2">
                                        <textarea name="comments" class="form-control"></textarea>
                                        <small class="text-info">If Any!</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <button type="submit" class="btn btn-success float-right">submit</button>
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection

@push('js')
    {{-- <script>
        $(document).ready(function () {
            $('.bookButton').on('click', function () {
               let thisRow = $(this).closest("tr");
               let mealType = thisRow.children().eq(0).html();
               let mealPrice = thisRow.children().eq(1).html();
               console.log(mealType);
               console.log(mealPrice);
            });
        });
    </script> --}}
    <script>
        $(".bookButton").on("click", function() {
            let thisRow = $(this).closest("tr");
            let mealType = thisRow.children().eq(1).html();
            let mealPrice = thisRow.children().eq(3).html();
            // console.log(thisRow);
            // console.log(mealType);
            // console.log(mealPrice);
            if (mealType == 'Breakfast') {
                let currentUnit = $("input[name='breakFastUnit']").val();
                let currentPrice = $("input[name='breakFastPrice']").val();
                currentUnit = parseInt(currentUnit) + 1;
                currentPrice = parseInt(currentPrice) + parseInt(mealPrice);
                $("input[name='breakFastUnit']").val(currentUnit);
                $("input[name='breakFastPrice']").val(currentPrice);

            } else if (mealType == 'Lunch') {
                let currentUnit = $("input[name='lunchUnit']").val();
                let currentPrice = $("input[name='lunchPrice']").val();
                currentUnit = parseInt(currentUnit) + 1;
                currentPrice = parseInt(currentPrice) + parseInt(mealPrice);
                $("input[name='lunchUnit']").val(currentUnit);
                $("input[name='lunchPrice']").val(currentPrice);
            } else if (mealType == 'Dinner') {
                let currentUnit = $("input[name='dinnerUnit']").val();
                let currentPrice = $("input[name='dinnerPrice']").val();
                currentUnit = parseInt(currentUnit) + 1;
                currentPrice = parseInt(currentPrice) + parseInt(mealPrice);
                $("input[name='dinnerUnit']").val(currentUnit);
                $("input[name='dinnerPrice']").val(currentPrice);
            } else {
                console.log('Unknown meal type');
            }
        });
        $(".reduceMeal").on("click", function() {
            let thisRow = $(this).closest("tr");
            let mealType = thisRow.children().eq(1).html();
            let mealPrice = thisRow.children().eq(3).html();
            if (mealType == 'Breakfast') {
                let currentUnit = $("input[name='breakFastUnit']").val();
                let currentPrice = $("input[name='breakFastPrice']").val();
                if (currentUnit != 0 && currentPrice != 0) {
                    currentUnit = parseInt(currentUnit) - 1;
                    currentPrice = parseInt(currentPrice) - parseInt(mealPrice);
                    $("input[name='breakFastUnit']").val(currentUnit);
                    $("input[name='breakFastPrice']").val(currentPrice);
                }

            } else if (mealType == 'Lunch') {
                let currentUnit = $("input[name='lunchUnit']").val();
                let currentPrice = $("input[name='lunchPrice']").val();
                if (currentUnit != 0 && currentPrice != 0) {
                    currentUnit = parseInt(currentUnit) - 1;
                    currentPrice = parseInt(currentPrice) - parseInt(mealPrice);
                    $("input[name='lunchUnit']").val(currentUnit);
                    $("input[name='lunchPrice']").val(currentPrice);
                }
            } else if (mealType == 'Dinner') {
                let currentUnit = $("input[name='dinnerUnit']").val();
                let currentPrice = $("input[name='dinnerPrice']").val();
                if (currentUnit != 0 && currentPrice != 0) {
                    currentUnit = parseInt(currentUnit) - 1;
                    currentPrice = parseInt(currentPrice) - parseInt(mealPrice);
                    $("input[name='dinnerUnit']").val(currentUnit);
                    $("input[name='dinnerPrice']").val(currentPrice);
                }
            } else {
                console.log('Unknown meal type');
            }
        });
    </script>
@endpush
