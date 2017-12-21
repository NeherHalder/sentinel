
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
                <div class="panel-body">
                	@if(in_array('user.create', $permissions))
                	<div>
                		<a href="">Add User</a>
                	</div>
                	@endif 
                	@if(in_array('user.edit', $permissions))
                	<div>
                		<a href="">Edit User</a>
                	</div>
                	@endif 
                	@if(in_array('user.delete', $permissions))
                	<div>
                		<a href="">Delete User</a>
                	</div>
                	@endif 
                	@if(in_array('user.role', $permissions))
                	<div><a href="">Add Role</a></div>
                	@endif 
                	@if(in_array('user.post', $permissions))
                	<div><a href="">Add Post</a></div>
                	@endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
