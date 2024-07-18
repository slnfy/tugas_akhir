<div class="row">
    <div class="form-group col-md-12">
        <label for="name">Nama</label>
        <input type="text" required class="form-control" id="name" name="nama" value="{{ @$user->nama }}" placeholder="Nama">
    </div>
    <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" required class="form-control" id="email" name="email" value="{{ @$user->email }}" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
        <label for="username">Username</label>
        <input type="username" required class="form-control" id="username" name="username" value="{{ @$user->username }}" placeholder="Username">
    </div>
    
    @if(!@$user)
    <div class="form-group col-md-12">
        <label>Password</label>
        <div class="input-group">
            <input type="password" id="password" required style="height: 43px;" name="password" class="form-control" placeholder="Password" >
            <button class="btn btn-outline-default" type="button" id="btn-sh-password"><i class="fa fa-eye-slash"></i></button>
        </div>
    </div>
    @endif
</div>