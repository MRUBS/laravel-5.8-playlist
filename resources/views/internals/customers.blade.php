@extends('layout')

@section('title', 'Customer List')

@section('content')


<div class="row">
    <div class="col col-12">
        <h1>Customers</h1>

        <form action="customers" method="POST" class="pt-5 pb-2">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                <div>
                    {{ $errors->first('name') }}
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                <div>
                    {{ $errors->first('email') }}
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Customer</button>

            @csrf

        </form>

    </div>
</div>
<hr>

<div class="row">
    <div class="col col-12">
        <ul>
            @foreach ($customers as $customer)
            <li>{{ $customer->name }} (<span class="text-muted">{{ $customer->email }}</span>)</li>
            @endforeach
        </ul>
    </div>
</div>

@endsection