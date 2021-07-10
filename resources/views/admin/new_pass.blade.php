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
            
					<form action="{{ route('reset_new_pass')}}" method="post" >
                    @csrf
                                     <div class="form-group">
									<label for="password">Nhap Mat Khau Moi</label>
                                    <input id="password" type="password" class="form-control" name="password_account" placeholder="" />
                                     
								</div>
                                <div class="form-group">
									<label for="password">Xac Nhan Mat Khau Moi</label>
                                    <input id="password" type="password" class="form-control" name="password_account" placeholder="" />
                                     
								</div>
								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Send Password
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