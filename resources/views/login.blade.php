<x-layout>
    <div class="row justify-content-center">
        @if($message = Session::get("error"))
            <div class="alert alert-danger">
                <h3>{{$message}}</h3>
            </div>
        @endif
        <form action="" method="post" class="d-flex justify-content-center flex-column  align-items-center gap-3" style="height: 80vh">
            @csrf
            @method("POST")
            <img src="images/warduino.png" alt="" style="width: 400px">
            <div class="form-group col-md-4 col-10">
                <label for="">Gebruikersnaam:</label>
                <input type="text" name="username" class="form-control" placeholder="Gebruikersnaam">
                <span class="text-danger">
                    @error("username"){{$message}}@enderror
                </span>

            </div>
            <div class="form-group col-md-4 col-10">
                <label for="">Wachtwoord:</label>
                <input type="text" name="password" class="form-control" placeholder="Wachtwoord">
                <span class="text-danger">
                     @error("password"){{$message}}@enderror
                </span>

            </div>
            <input type="submit" class="btn btn-primary col-md-4 col-10" value="Login">
        </form>
    </div>
</x-layout>
