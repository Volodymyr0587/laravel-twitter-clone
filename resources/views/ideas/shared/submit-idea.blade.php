@auth
<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{ route('ideas.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <textarea class="form-control" name="content" id="content" rows="3">{{ old('content') }}</textarea>
            @error('content')
                <spap class="d-block fs-6 text-danger mt-2">{{ $message }}</spap>
            @enderror
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
@endauth

@guest
<h4>Login to share yours ideas </h4>
@endguest
