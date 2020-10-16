<h1>Welcome To The Customer</h1>


<a href="/customers/create">Add New Customers</a>

@forelse($customers as $data)

<p><strong><a href="/customers/{{$data->id}}">{{$data->name}}</a></strong> ({{$data->email}})</p>

@empty
<p>No Customer Are Available</p>

@endforelse