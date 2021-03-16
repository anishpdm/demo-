@extends("heading")

@section("content")



<div class="container">
        <div class="row">
            <div class="col col-12 col-sm-3 col-md-3">
            </div>

            <div class="col col-12 col-sm-6 col-md-6">

            <form action="/sub" method="post">
            @csrf
            
            
            <table class="table table-borderless">
                <tr>
                    <td> Username</td>
                    <td><input name="uname" type="text" class="form-control"></td>
                </tr>

                <tr>
                    <td> password</td>
                    <td><input name="pass" type="text" class="form-control"></td>
                </tr>

                <tr>
                    <td> </td>
                    <td> <button class="btn btn-success">LOGIN </button></td>
                </tr>
            </table>
            
            </form>
            </div>

            <div class="col col-12 col-sm-3 col-md-3">
            </div>
        </div>
    </div>

@endsection 
    


