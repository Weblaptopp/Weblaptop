<!DOCTYPE html>
<html lang="en">
@include('admin.header.head')
<body>
<div class="login-form">
@if (count($errors) >0)
         <ul>
             @foreach($errors->all() as $error)
                 <li class="text-danger"> {{ $error }}</li>
             @endforeach
         </ul>
     @endif

     @if (session('status'))
         <ul>
             <li class="text-danger"> {{ session('status') }}</li>
         </ul>
     @endif
	 <div aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
                    
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('getLogin')}}" method="post">
					{{ csrf_field() }}
                    <div class="form-group">
            <input type="text" name="txtEmail" value="admin@gmail.com" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="txtMatKhau" value="123456789" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="{{ route('resetPassword')}}" data-toggle="modal" data-target="#exampleModal2">
								Forgot Password</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>