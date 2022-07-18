<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first name', 'First Name:') !!}
    <p>{{ $employee->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-12">
    {!! Form::label('last name', 'Last Name:') !!}
    <p>{{ $employee->last_name }}</p>
</div>

<!-- Company Field -->
<div class="col-sm-12">
    {!! Form::label('company', 'Company_id') !!}
    <p>{{ $employee->company_id }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $employee->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $employee->phone }}</p>
</div>

