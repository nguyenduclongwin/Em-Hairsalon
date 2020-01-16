@extends('layout')
@section('title','List Book')

@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered " id="book-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Salon</th>
                    <th>Service</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#book-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('ajax') }}",
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'gender',
                    name: 'gender'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'salon',
                    name: 'salon'
                },
                {
                    data: 'service',
                    name: 'service'
                },
                {
                    data: 'date',
                    name: 'date'
                },
                {
                    data: 'time',
                    name: 'time'
                },
                {
                    data: 'message',
                    name: 'message'
                }
            ]
        });
    });
</script>
@endsection