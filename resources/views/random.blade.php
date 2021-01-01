@extends('welcome')
@section('content')

<h2>random View</h2>
<form action=""  method="get">
<label for="">Product Name</label>
<input type="text"  name='PName'>
<br>
<label for="">Product Price</label>
<input type="text" name='PPrice'>
<br>
<input type="submit" value='submit'>

</form>

@endsection



