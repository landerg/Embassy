@extends('layout.index')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/content-visas.css') }}">
@stop

@section('content')
    <div class="forma-reg" id="registration-form-location">
        <form action="" method="post">
            {{csrf_field()}}
            {{method_field('post')}}
        <h1>Register Your Documents</h1>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

        <label for="type">Passport type: </label>
        <input list="type" name="passport_type" placeholder="Type..." value="{{ old('passport_type') }}">
        <datalist id="type">
            <datalist id="type"></datalist>
            <option value="passport">P</option>
            <option value="id-passport">ID</option>
        </datalist>
        <br><br>

        <label for="passportNo">Passport No. </label>
        <input type="text" id="passportNo" name="passport_no" value="{{ old('passport_no') }}" placeholder="No..." maxlength="8">
        <br><br>

        <label for="countryCode">Countery code: </label>
        <input type="text" id="countryCode" name="country_code" value="{{ old('country_code') }}" placeholder="Countery code..." maxlength="10">
        <br><br>

        <label for="first_name">First Name: </label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="First Name...">
        <br><br>

        <label for="givenName">Given Name: </label>
        <input type="text" id="givenName" name="given_name" value="{{ old('given_name') }}" placeholder="Given Name...">
        <br><br>

        <label for="birthDate">Birth Date: </label>
        <input type="date" id="birthDate" value="{{ old('birth_date') }}" name="birth_date">
        <br><br>

        <label for="birthPlace">Birth Place: </label>
        <input type="text" id="birthPlace" name="birth_place" value="{{ old('birth_place') }}" placeholder="Birth Place">
        <br><br>

        <label for="sex">Chose sex: </label><br>
        <label>Male </label><input type="radio" id="male" name="sex" {{ old('sex') == 'male' ? 'checked="true"' : '' }} value="male"><br>
        <label>Female </label>  <input type="radio" id="female" name="sex" {{ old('sex') == 'female' ? 'checked="true"' : '' }} value="female">
        <br><br>

        <label for="issue">Date of issue: </label>
        <input type="date" name="issue" value="{{ old('issue') }}" id="issue">

        <br><br>
        <label for="expire">Date of expire: </label>
        <input type="date" name="expire" value="{{ old('expire') }}" id="expire">

        <br><br>
        <label for="authory">Authoty: </label>
        <input type="text" name="authory" id="authory" value="{{ old('authory') }}" placeholder="Authoty" maxlength="4">

        <br><br>
        <button class="submit-data-button" type="submit" name="submit_data_button">Submit Data</button>

        </form>
    </div>

    <div class="forma-check" id="search-form-location">
        <form method="get" action='/visas?#search-form-location'>
        <label for="search"></label>
        <input class="search" type="text" name="search" value="{{ old('search', Request::get('search')) }}" placeholder="Search...">
        <button class="search-button" type="submit">Search</button>

        <br><br>



        </form>
        <div class="ans-block">
            @if($search_data)
                <br>
                <span>Passport type:  {{ $search_data->passport_type }} </span>
                <br> 
                <span>Passport No.    {{ $search_data->passport_no }} </span>
                <br>  
                <span>Country code:   {{ $search_data->country_code }} </span>
                <br>  
                <span>First name:     {{ $search_data->first_name }} </span>
                <br>  
                <span>Given name:     {{ $search_data->given_name }} </span>
                <br>  
                <span>Birth date:     {{ $search_data->birth_date }} </span>
                <br>  
                <span>Birth place:    {{ $search_data->birth_place }} </span>
                <br>  
                <span>Sex:            {{ $search_data->sex}}</span>
                <br>  
                <span>Authory:        {{ $search_data->authory }} </span>
                <br>  
                <span>Issue date:     {{ $search_data->issue }} </span>
                <br>  
                <span>Expire date:    {{ $search_data->expire }} </span>    
                
            @elseif(!$search_data && Request::get('search'))
            <br>
                <span>No results found</span>
            @endif
        </div>
    </div>
@endsection
