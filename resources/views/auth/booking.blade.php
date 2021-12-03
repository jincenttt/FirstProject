@extends('layouts.app')

@section('contents')

<div class = "flex justify-center">
<div class = "w-8/12 bg-white p-6 rounded-lg">



<form class = "form-inline"action="{{route('booking')}}" method="post">
@csrf
<h3 align = "center" class = "p-6">Customer details</h3>

<label for="surname" class = "sr-only">Surname</label>
<input type="text" name = "surname" id = "surname" placeholder = "Input Surname"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('surname') border-red-500 @enderror " value="{{old('surname')}}">

@error('surname')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror


<label for="firstname" class = "sr-only">First Name</label>
<input type="text" name = "firstname" id = "firstname" placeholder = "Input  First Name"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('firstname') border-red-500 @enderror " value="{{old('firstname')}}">

@error('firstname')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror


<label for="middlename" class = "sr-only">Middle Name</label>
<input type="text" name = "middlename" id = "middlename" placeholder = "Input Middle Name"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('middlename') border-red-500 @enderror " value="{{old('middlename')}}">

@error('middlename')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror



<label for="age" class = "sr-only">Age</label>
<input type="int" name = "age" id = "age" placeholder = "Age"
class = "bg-gray-100 border-2 w-20 p-4 rounded-lg @error('age') border-red-500 @enderror " value="{{old('age')}}">

@error('age')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror



<label for="bday" class = "sr-only">Date Of Birth</label>
<input type="text" name = "bday" id = "bday" placeholder = "Date of Birth"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('bday') border-red-500 @enderror " value="{{old('bday')}}">

@error('bday')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror

<h3 align = "center" class = "p-6">Customer Address</h3>


<label for="streetname" class = "sr-only">Streetname</label>
<input type="text" name = "streetname" id = "streetname" placeholder = "Street Name"
class = "bg-gray-100 border-2 w-70 p-4 rounded-lg @error('streetname') border-red-500 @enderror " value="{{old('streetname')}}">

@error('streetname')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror


<label for="city" class = "sr-only">City</label>
<input type="text" name = "city" id = "city" placeholder = "Input City"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('city') border-red-500 @enderror " value="{{old('city')}}">

@error('city')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror

<label for="postal" class = "sr-only">Postal Code</label>
<input type="int" name = "postal" id = "postal" placeholder = "Postal Code"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('postal') border-red-500 @enderror " value="{{old('postal')}}">

@error('postal')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror



<h3 align = "center" class = "p-6">Contact Information</h3>


<label for="phonenumber" class = "sr-only">Phone Number</label>
<input type="int" name = "phonenumber" id = "phonenumber" placeholder = "Phone Number"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('phonenumber') border-red-500 @enderror " value="{{old('phonenumber')}}">

@error('phonenumber')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror


<label for="mobilenumber" class = "sr-only">Mobile Number</label>
<input type="int" name = "mobilenumber" id = "mobilenumber" placeholder = "Mobile Number"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('mobilenumber') border-red-500 @enderror " value="{{old('mobilenumber')}}">

@error('mobilenumber')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror

<label for="email" class = "sr-only">Email Address</label>
<input type="text" name = "email" id = "email" placeholder = "Email Address"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('email') border-red-500 @enderror " value="{{old('email')}}">

@error('email')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror

<h3 align = "center" class = "p-6">Person to contact in case of emergency</h3>

<label for="fullname" class = "sr-only">Relative Name</label>
<input type="text" name = "fullname" id = "fullname" placeholder = "Relative's Fullname"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('fullname') border-red-500 @enderror " value="{{old('fullname')}}">

@error('fullname')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror

<label for="emergencynumber" class = "sr-only">Emergency Contact No.</label>
<input type="int" name = "emergencynumber" id = "emergencynumber" placeholder = "Emergency Contact No:"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('emergencynumber') border-red-500 @enderror " value="{{old('emergencynumber')}}">

@error('emergencynumber')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror

<label for="relationship" class = "sr-only">Relationship with contact</label>
<input type="text" name = "relationship" id = "relationship" placeholder = "Relationship with contact"
class = "bg-gray-100 border-2 w-50 p-4 rounded-lg @error('relationship') border-red-500 @enderror " value="{{old('relationship')}}">

@error('relationship')
<div class = "text-red-500 mt-2  text-sm">
{{$message}}
</div>
@enderror

<div align = "center">
<button type = "submit" class = "bg-blue-500 bg-white px-4 py-3 rounded font-medium  w-80">
    Book now
</button>
</div>

</form>

</div>
</div>

@endsection
