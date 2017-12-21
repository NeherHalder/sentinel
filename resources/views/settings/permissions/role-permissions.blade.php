
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('role-permissions.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <label>User Roules</label>

                                <div class="checkbox">
                                    <label><input type="checkbox" name="permissions[]" checked value="user.create">Create</label>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" name="permissions[]" checked value="user.edit">Edit</label>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" name="permissions[]" checked value="user.delete">Delete</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
