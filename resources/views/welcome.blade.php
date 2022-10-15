
@extends('layouts.dashboard.app')

@section('style')
<!-- Custom styles for this page -->
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

@endsection

@section('container')
@endsection
@section('script')
<!-- Page level plugins -->
<script src="{{ asset('dashboard/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('dashboard/js/demo/datatables-demo.js') }}"></script>
@endsection