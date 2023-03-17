<form action="{{ route($routeName, $review) }}" method="POST" class="p-5" enctype="multipart/form-data">
    @csrf
    @method($method)

    @if($errors->any())
    <div class="error-wrapper">
        <div class="alert alert-danger ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" value="{{ old('name', $review->name) }}" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
        <label for="surname" class="form-label">Surnname:</label>
        <input type="text" value="{{ old('surname', $review->surname) }}" class="form-control" id="surname" name="surname">
    </div>

    <div class="mb-3 col-1">
        <label for="vote" class="form-label">Vote:</label>
        <input type="number" value="{{ old('vote', $review->vote) }}" min="1" max="5" class="form-control" id="vote" rows="1" name="vote">
    </div>
    
    <div class="mb-3">
        <label for="text_review" class="form-label">Text review:</label>
        <textarea class="form-control" id="text_review" rows="5" name="text">{{ old('text', $review->text) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="user_id" class="form-label">User ID:</label>
        <input class="form-control" value="{{ old('user_id', $review->user_id) }}" id="user_id" name="user_id">
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            {{ $routeName == 'admin.reviews.update' ? 'Update review' : 'Create new review'  }}
        </button>
    </div>

    </div>
</form>