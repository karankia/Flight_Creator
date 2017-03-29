<select  class="form-control">
  <option id="city"><hr></option>
</select>

<p></p>

 <p id="city"></p>
 <script type="text/javascript">
document.getElementById("city").innerHTML = 
   '@foreach($users as $user)'+
    '{{ $user->city_name }} \n {{ $user->airport_name }}'+
    '@endforeach';
</script>

{{ Form::select('animal',[
    'Cats' => ['leopard' => 'Leopard'],
    'Dogs' => ['spaniel' => 'Spaniel'],
])}}




<form method="POST" action="/profile">
    {{ csrf_field() }}

<div class="row">
  <div class="col-md-4">
	<select  class="form-control">
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>
	  <option>4</option>
	  <option>5</option>
	</select>  	
  </div>
  <div class="col-md-8">
    @foreach($users as $user)
    
    {{ $user->city_name }}  {{ $user->airport_name }}
    
    @endforeach
  </div>
</div>
</form>