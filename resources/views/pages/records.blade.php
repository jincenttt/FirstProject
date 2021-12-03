@extends('layouts.app')

@section('contents')

<div class = "flex justify-center">
    <div class = "w-full bg-gray-300 p-6 rounded-lg">
<h3 align = "center">Booking Records</h3>

<table >
    <thead  class = "p-1">
        <th class = "p-1"> Id </th>
        <th  class = "p-1"> Surname  </th>
        <th class = "p-1"> First Name  </th>
        <th class = "p-1"> Middle name  </th>
        <th class = "p-1"> Age  </th>
        <th class = "p-1"> Date of Birth  </th>
        <th class = "p-1"> Street Name </th>
        <th class = "p-1"> City  </th>
        <th class = "p-1"> Postal Code  </th>
        <th class = "p-1"> Phone Number </th>
        <th class = "p-1"> Mobile Number  </th>
        <th class = "p-1"> Email Address  </th>
        <th class = "p-1"> Fullname  </th>
        <th class = "p-1"> Emergency Number  </th>
        <th class = "p-1"> Relationship  </th>
        <th class = "p-1"> Actions  </th>
    </thead>
    <tbody>
            @foreach ($records as $record)
            <tbody>
                <td class = "p-1">{{ $record['id']}}</td>
                <td class = "p-1">{{ $record['surname']}}</td>
                <td class = "p-1">{{ $record['firstname']}}</td>
                <td class = "p-1">{{ $record['middlename']}}</td>
                <td class = "p-1">{{ $record['age']}}</td>
                <td class = "p-1">{{ $record['bday']}}</td>
                <td class = "p-1">{{ $record['streetname']}}</td>
                <td class = "p-1">{{ $record['city']}}</td>
                <td class = "p-1">{{ $record['postal']}}</td>
                <td class = "p-1">{{ $record['phonenumber']}}</td>
                <td class = "p-1">{{ $record['mobilenumber']}}</td>
                <td class = "p-1">{{ $record['email']}}</td>
                <td class = "p-1">{{ $record['fullname']}}</td>
                <td class = "p-1">{{ $record['emergencynumber']}}</td>
                <td class = "p-1">{{ $record['relationship']}}</td>
                <td>
                    <!--Place inside a view record function/anchor-->
                    <a href="{{route('view',$record['id'])}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </a>
                <!-- place inside a update function/anchor-->
                <a href="{{route('show',$record['id'])}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                </svg>
                </a>

                <!-- place inside a delete function-->
                <a href="{{ route('delete',$record['id']) }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
                 </a>

            </td>
            </tbody>
            @endforeach
    </tbody>
</table>
</div>
</div>
@endsection
