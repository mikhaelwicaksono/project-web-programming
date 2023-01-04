@extends('template.master')

@section('')
    <button class="navigation-button" onclick="location.href='{{ url('/') }}'">home</button>
@endsection

@section('content')
    @foreach ($target as $d)
        <form class="insert-page-container" method="POST" enctype="multipart/form-data"
            action="{{ Route('item.actionUpdateData', ['id' => $d]) }}">
            @csrf
            @method('PATCH')

            <div class="error-message">
                your error message
            </div>

            <div class="card-item-image">
                <img src="" alt="">
            </div>

            <input type="file" placeholder="update image" class="insert-page-input" name="update-image">
            <input type="text" placeholder="update title" value="value title" class="insert-page-input"
                name="update-title">
            <input type="text" placeholder="update price" value="value price" class="insert-page-input"
                name="update-price">
            <button type="submit" class="insert-page-button">update item</button>
        </form>
    @endsection
