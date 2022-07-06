<h1 align="center">View Courier List</h1><br><br>

@foreach($couriers as $courier)
@csrf

<h4>Courier Id : {{$courier['id']}}</h4>
<h4>Sender Name : {{$courier['sender_name']}}</h4>
<h4>Sender Phone : {{$courier['sender_phone']}}</h4>
<h4>Sender Address : {{$courier['sender_address']}}</h4>
<h4>Recevier Name : {{$courier['recevier_name']}}</h4>
<h4>Recevier Phone : {{$courier['recevier_phone']}}</h4>
<h4>Recevier Address : {{$courier['recevier_address']}}</h4>
<h4>Recevied Date : {{$courier['date']}}</h4>
<h4>Recevied Time : {{$courier['time']}}</h4>
<h4>Cake : {{$courier['cake']}}</h4>
<h4>Rapping : {{$courier['rapping']}}</h4>
<a href={{"deletecourier/" .$courier->id}}>cencel</a>


@endforeach
<style type="text/css">
	body{
	background:black;
	color: red;
	font-weight: bold;
	font-size: 25px;
	

</style>