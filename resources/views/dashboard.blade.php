@foreach ($users as $user)
    <h1>{{ $user['name'] }}</h1>
    <h2>{{ $user['age'] }}</h2>
    @if ($user['age'] < 18)
        <p>The user cannot drive a vehicle because he is under 18 years of age</p>
    @endif
    <hr>
@endforeach


&copy; {{ date('Y') }}
