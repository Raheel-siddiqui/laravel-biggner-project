<div>
<label for="name">Name</label>
<input type="text" name="name" autocomplete="off" value="{{old('name') ?? $customer->name}}" >
<p style="color:red">@error('name')  {{$message}}  @enderror
</p>
</div>

<div>
<label for="email">Email</label>
<input type="text" name="email" autocomplete="off" value="{{old('email') ?? $customer->email}}">
<p style="color:red">@error('email') {{$message}} @enderror</p>

</div>
@Csrf