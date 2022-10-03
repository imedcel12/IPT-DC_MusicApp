@extends('base')

@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-header bg-primary text-dark text-center">
            <h1>Activity Log</h1>
            <hr>
        </div>

        <div class="card-body">
            <table class="table table-hover text-center table table-striped">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th>Timestamp</th>
                        <th>Log Entry</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>{{$log->created_at}}</td>
                            <td>{{$log->log_entry}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
