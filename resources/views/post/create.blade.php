@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ایجاد پست') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div style="float: right;" >
                                <form method="post" action="{{route('post.store')}}" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" >عنوان پست</label>
                                        <input type="text" class="form-control" name="title"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="body">متن پست</label>
                                        <textarea type="text" class="form-control" name="body" rows="7" ></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">ارسال </button>
                                </form>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


