@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <div class="panel panel-warning">
                <div class="panel-heading">Settings Values</div>
                <div class="panel-body">
                    Here are current settings values stored in database.
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>Setting</th>
                        <th>Value</th>
                        <th>Accessor</th>
                    </tr>
                    @forelse($settings as $setting)
                    <tr>
                        <td>{{ $setting->name }}</td>
                        <td>{{ $setting->val }}</td>
                        <td><code>\setting('{{ $setting->name }}')</code></td>
                    </tr>
                        @empty
                    <tr>
                        <td colspan="3" class="text-center">No settings saved in DB.</td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
