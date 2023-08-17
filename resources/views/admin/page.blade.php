<form method="GET" action="{{ route('words.index') }}" class="col-lg-4">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" placeholder="Search by word" value="{{ request()->query('search') }}">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
    </div>
</form>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr >
            <th class="col-lg-1">Word</th>
            <th class="col-lg-1">Classes</th>
            <th class="col-lg-1">Pronunciation</th>
            <th class="col-lg-3">Definition</th>
            <th class="col-lg-3">Example</th>
            <th class="col-lg-1">Action</th>
            <th class="col-lg-1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($words as $word)
            <tr class="word-row">
                <td class="col-lg-1">{{ $word->name }}</td>
                <td class="col-lg-1">{{ $word->classes }}</td>
                <td class="col-lg-1">{{ $word->pronunciation }}</td>
                <td class="col-lg-3">{{ Str::limit($word->definition, 100) }}</td>
                <td class="col-lg-3">{{ Str::limit($word->example, 100) }}</td>
                <td class="col-lg-1">
                    <a href="{{ route('words.edit', ['word' => $word->id]) }} " class="btn btn-warning">
                    EDIT
                        <i class="fa fa-magic" aria-hidden="true"></i>
                    </a>
                </td>
                <td class="col-lg-1">
                    <form action="{{ route('words.destroy', $word->id) }}" method="POST" id="delete-word">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" data-confirm="Are you sure ?">DELETE
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center">
    {!! $words->links() !!}
</div>
<script src="{{ asset('js/page.js') }}"></script>

