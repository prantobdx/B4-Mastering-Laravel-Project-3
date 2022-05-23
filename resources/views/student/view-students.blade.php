@extends ('master')

@section ('title')
Student info
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach ($students as $student)           
            <div class="col-md-4 mt-2">
                <div class="card">
                    <img src="{{ $student['image'] }}" alt="" class="card-img-top" style="height: 300px">
                    <div class="card-body">
                        <h5>Student Name : {{ $student['name'] }}</h5>
                        <h5>Student Phone : {{ $student['phone'] }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection