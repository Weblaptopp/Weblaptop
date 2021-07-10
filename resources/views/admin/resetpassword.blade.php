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
					<h5 class="modal-title text-center">Forgot Password</h5>
                    
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('recover_pass')}}" method="post" >
                    @csrf
     <div class="form-group">
									<label for="Email">E-Mail Address</label>
									<input id="Email" type="Email" class="form-control" name="Email" value="{{ old('Email') }}" placeholder="Enter your email">
                                    <span class="text-danger">@error('Email'){{ $message }} @enderror</span>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Send Password Link
									</button>
								</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>