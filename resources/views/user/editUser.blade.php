@include('layout.header')

	<div class="container">
		<h3>User</h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Edit User</h3>
					</div>
					<form role="form" method="POST" action="{{route('user.update',$data->id)}}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
						<div class="card-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Name</label>
								<input type="text" class="form-control" name="name" placeholder="Full name" value="{{$data->name}}">
								<p class="alert text-danger alert_error"> {{$errors->first('name')}}</p>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Gender</label>
								<select class="form-control" name="gender">
								<option value="Nam">Nam</option>
								<option value="Nữ">Nữ</option>
								</select>
								<p class="alert text-danger alert_error"> {{$errors->first('gender')}}</p>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Address</label>
								<input type="text" class="form-control" name="address" placeholder="Address" value="{{$data->address}}">
								<p class="alert text-danger alert_error"> {{$errors->first('address')}}</p>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Birthday</label>
								<input type="text" class="form-control" name="birthday" placeholder="Birthday" value="{{$data->birthday}}">
								<p class="alert text-danger alert_error"> {{$errors->first('birthday')}}</p>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Phone</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$data->phone}}">
								<p class="alert text-danger alert_error"> {{$errors->first('phone')}}</p>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Note</label>
								<input type="text" class="form-control" name="note" placeholder="Note" value="{{$data->note}}">
								<p class="alert text-danger alert_error"> {{$errors->first('note')}}</p>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>	
				</div> 
			</div>
		</div>
	</div>
	
@include('layout.footer')