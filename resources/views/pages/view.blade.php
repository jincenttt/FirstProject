@extends('layouts.app')

@section('contents')


@csrf

<table>
    <thead>
        <th class = "p-3"> Id </th>
        <th  class = "p-3"> Surname  </th>
        <th class = "p-3"> First Name </th>
        <th class = "p-3"> Middle name  </th>
        <th class = "p-3"> Age  </th>
        <th class = "p-3"> Date of Birth  </th>
        <th class = "p-3"> Street Name </th>
        <th class = "p-3"> City  </th>
        <th class = "p-3"> Postal Code  </th>
        <th class = "p-3"> Phone Number  </th>
        <th class = "p-3"> Mobile Number  </th>
        <th class = "p-3"> Email Address  </th>
        <th class = "p-3"> Fullname  </th>
        <th class = "p-3"> Emergency Number  </th>
        <th class = "p-3"> Relationship </th>
    </thead>
    <tbody>

        <td class = "p-3">{{ $id['id']}}</td>
        <td class = "p-3">{{ $id['surname']}}</td>
        <td class = "p-3">{{ $id['firstname']}}</td>
        <td class = "p-3">{{ $id['middlename']}}</td>
        <td class = "p-3">{{ $id['age']}}</td>
        <td class = "p-3">{{ $id['bday']}}</td>
        <td class = "p-3">{{ $id['streetname']}}</td>
        <td class = "p-3">{{ $id['city']}}</td>
        <td class = "p-3">{{ $id['postal']}}</td>
        <td class = "p-3">{{ $id['phonenumber']}}</td>
        <td class = "p-3">{{ $id['mobilenumber']}}</td>
        <td class = "p-3">{{ $id['email']}}</td>
        <td class = "p-3">{{ $id['fullname']}}</td>
        <td class = "p-3">{{ $id['emergencynumber']}}</td>
        <td class = "p-3">{{ $id['relationship']}}</td>


    </tbody>

</table>

<div class = "p-3">
    <button type = "submit"><a href="{{route('viewrecords')}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
      </svg></a></button>
</div>

@endsection
