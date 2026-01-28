@extends('admin.admin_master')
@section('collection_history')
<div class="row">
    <!-- [Invoices Awaiting Payment] start -->
    <div class="col-xxl-3 col-md-6">
        <div class="card stretch stretch-full">
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" id="loan_id" class="form-control" placeholder="Enter Loan ID"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary submitLoan" type="button"
                        id="button-addon2">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-12 bg-white p-3" id="load_collection">
        
    </div>
</div>

<script>
$(document).ready(function () {
    $(document).on("click", ".submitLoan", function () {
        let loan_id = $("#loan_id").val();

        $.ajax({
            url: "{{ route('fetch.collection_history') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}", // ✅ THIS FIXES IT
                loan_id: loan_id
            },
            success: function (res) {
                console.log("Loaded")
                $("#load_collection").empty();
                $("#load_collection").html(res);
            }
        });
    });
});

</script>
@endsection