@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    Adda a Flight
                </div>
            </div>

        <div class="row">
          <div class="col-md-6"> 
            <form method="POST" action="{{ url('/add') }}">
                {{ csrf_field() }}  

                  <label>Trip Name</label>
                    <select class="form-control">
                      <option>Germany</option>
                      <option>India</option>
                      <option>USA</option>
                      <option>Spain</option>
                      <option>Italy</option>
                    </select><br>          
                  <label>From</label>
                    <select name="depart" class="form-control">
                      <option id="depart" type="text" value="BCN">BCN</option>
                      <option id="depart" type="text" value="BOM">BOM</option>
                      <option id="depart" type="text" value="CDG">CDG</option>
                      <option id="depart" type="text" value="DCA">DCA</option>
                      <option id="depart" type="text" value="DEL">DEL</option>
                      <option id="depart" type="text" value="FRA">FRA</option>
                      <option id="depart" type="text" value="IAD">IAD</option>
                      <option id="depart" type="text" value="IATA">IATA</option>
                      <option id="depart" type="text" value="JFK">JFK</option>
                      <option id="depart" type="text" value="LAX">LAX</option>
                      <option id="depart" type="text" value="LGA">LGA</option>
                      <option id="depart" type="text" value="MAA">MAA</option>
                      <option id="depart" type="text" value="MAD">MAD</option>
                      <option id="depart" type="text" value="MUC">MUC</option>
                      <option id="depart" type="text" value="NCE">NCE</option>
                      <option id="depart" type="text" value="YHZ">YHZ</option>
                      <option id="depart" type="text" value="YTZ">YTZ</option>
                      <option id="depart" type="text" value="YUL">YUL</option>
                      <option id="depart" type="text" value="YVR">YVR</option>
                      <option id="depart" type="text" value="YYZ">YYZ</option>
                    </select><br>
                    <label>To</label> 
                    <select  name="arrive" class="form-control">
                      <option id="arrive" type="text" value="BCN">BCN</option>
                      <option id="arrive" type="text" value="BOM">BOM</option>
                      <option id="arrive" type="text" value="CDG">CDG</option>
                      <option id="arrive" type="text" value="DCA">DCA</option>
                      <option id="arrive" type="text" value="DEL">DEL</option>
                      <option id="arrive" type="text" value="FRA">FRA</option>
                      <option id="arrive" type="text" value="IAD">IAD</option>
                      <option id="arrive" type="text" value="IATA">IATA</option>
                      <option id="arrive" type="text" value="JFK">JFK</option>
                      <option id="arrive" type="text" value="LAX">LAX</option>
                      <option id="arrive" type="text" value="LGA">LGA</option>
                      <option id="arrive" type="text" value="MAA">MAA</option>
                      <option id="arrive" type="text" value="MAD">MAD</option>
                      <option id="arrive" type="text" value="MUC">MUC</option>
                      <option id="arrive" type="text" value="NCE">NCE</option>
                      <option id="arrive" type="text" value="YHZ">YHZ</option>
                      <option id="arrive" type="text" value="YTZ">YTZ</option>
                      <option id="arrive" type="text" value="YUL">YUL</option>
                      <option id="arrive" type="text" value="YVR">YVR</option>
                      <option id="arrive" type="text" value="YYZ">YYZ</option>
                    </select><br>
                <button type="submit" class="btn btn-default">Add</button>
            </form> 
          </div>
          <div class="col-md-6">


             @foreach($users as $user)
             <h3>From {{ $user->depart }}  To {{ $user->arrive }}</h3><br>
                 <p> <a href = "{{route('post.delete',['post_id'=>$post->id])}}"> Delete </a></p>
             @endforeach

  

          </div>
        </div>
 


        </div>
    </div>
</div>
@endsection
