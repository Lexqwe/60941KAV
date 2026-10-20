<div class="d-flex flex-column align-items-center mt-4">
    @if ($paginator->hasPages())
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mb-3">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
                </li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
    @endif
    <form method="get" action="{{ url()->current() }}" class="d-flex align-items-center">
        <label class="me-2 text-muted">Элементов на странице:</label>
        <select name="perpage" class="form-select form-select-sm me-2" style="width: auto;" onchange="this.form.submit()">
            <option value="2" @if($paginator->perPage() == 2) selected @endif>2</option>
            <option value="5" @if($paginator->perPage() == 5) selected @endif>5</option>
            <option value="10" @if($paginator->perPage() == 10) selected @endif>10</option>
            <option value="20" @if($paginator->perPage() == 20) selected @endif>20</option>
        </select>
    </form>
</div>



