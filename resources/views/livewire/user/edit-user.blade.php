<form action="{{ route('user.update',$User) }}" method="post">
    @csrf
    @method('put')
    <h1>Perfil</h1>

    <!-- <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <span>or use your email for registration</span> -->
    <!-- <input type="text" placeholder="Name" /> -->
    <input type="text" placeholder="{{ __('Name') }}" value="{{$User->name}}" id="name" name="name" />
    @error('name')
    <div><label style="color:#DC3545">{{ $message }}</label></div>
    @enderror

<!-- <input type="text" placeholder="Edad" /> -->
    <input type="text" class="form-control" placeholder="Edad" value="{{$User->age}}" id="age" name="age" />
    @error('age')
    <div><label style="color:#DC3545">{{ $message }}</label></div>
    @enderror




    <br>
    <button id="btn-primary" type="submit">Actualizar perfil</button>
    <!-- <input type="submit" id="btn-primary"  value="Registrarse"/> -->
</form>
</div>
