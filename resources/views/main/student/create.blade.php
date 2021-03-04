@extends('main.main')
@section('content')
    <div class="container " data-aos="fade-up">

    <div class="row" style="margin-top:235px">
        <div class="col-md-6 col-offset-3">

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    Student Registration
                </div>
                <div class="card-body">
                    <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="student_name">
                    </div>


                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>


                    <div class="form-group">
                        <label for="">Mobile</label>
                        <input type="text" class="form-control" name="mobile">
                    </div>


                    <div class="form-group">
                        <label for="">Session</label>
                        <input type="text" class="form-control" name="session">
                    </div>


                    <div class="form-group">
                        <label for="">Idno</label>
                        <input type="text" class="form-control" name="idno">
                    </div>

                    <div class="form-group">
                        <label for="">Registration no</label>
                        <input type="text" class="form-control" name="regno">
                    </div>

                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                      <button type="submit" class="form-control btn btn-success">Register</button>
                    </div>


                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
