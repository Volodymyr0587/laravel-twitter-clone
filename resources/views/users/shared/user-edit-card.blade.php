<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                        src="{{ $user->getImageURL() }}" alt="{{ $user->name }} Avatar">
                    <div>
                        <input name='name' value="{{ $user->name }}" type="text" class="form-control">
                        @error('name')
                        <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                        @enderror
                        <div>
                            @auth
                            @if (auth()->id() === $user->id)
                            <a href="{{ route('users.show', $user) }}">View</a>
                            @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <label for="image">Profile image</label>
                <input name="image" class="form-control" type="file">
                @error('image')
                <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="px-2 mt-4">
                <h5 class="fs-5"> Bio : </h5>

                <div class="mb-3">
                    <textarea class="form-control" name="bio" id="bio" rows="3">{{ $user->bio }}</textarea>
                    @error('bio')
                    <spap class="d-block fs-6 text-danger mt-2">{{ $message }}</spap>
                    @enderror
                </div>

                <button class="btn btn-dark btn-sm mb-3">Save</button>

                @include('users.shared.user-stats')
            </div>
        </form>
    </div>
</div>
