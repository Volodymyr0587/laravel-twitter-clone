<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="{{ $idea->user->getImageURL() }}" alt="{{ $idea->user->name }} Avatar">
                <div>
                    <h5 class="card-title mb-0">
                        <a href="{{ route('users.show', $idea->user) }}">{{ $idea->user->name }}</a>
                    </h5>
                </div>
            </div>
            <div>
                <form action="{{ route('ideas.destroy', $idea) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="mx-2" href="{{ route('ideas.edit', $idea) }}">Edit</a>
                    <a href="{{ route('ideas.show', $idea) }}">View</a>
                    <button class="ms-1 btn btn-danger btn-sm" onclick="return confirm('Are You Sure?');">X</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($editing ?? false)
        <form action="{{ route('ideas.update', $idea) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <textarea class="form-control" name="content" id="content" rows="3">{{ $idea->content }}</textarea>
                @error('content')
                    <spap class="d-block fs-6 text-danger mt-2">{{ $message }}</spap>
                @enderror
            </div>
            <div class="">
                <button type="submit" class="btn btn-sm btn-dark mb-2"> Update </button>
            </div>
        </form>
        @else
        <p class="fs-6 fw-light text-muted">
            {{ $idea->content }}
        </p>
        @endif
        <div class="d-flex justify-content-between">
            @include('ideas.shared.like-button')
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $idea->created_at->diffForHumans() }} </span>
            </div>
        </div>
        @include('ideas.shared.comments-box')
    </div>
</div>
