@if ($paginator["last_page"] > 1)
<ul class="pagination">
    <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $paginator["last_page"]; $i++)
        <li class="{{ ($paginator["current_page"] == $i) ? ' active' : '' }}">
            <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($paginator["current_page"] == $paginator["last_page"]) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url($paginator["current_page"]+1) }}" >Next</a>
    </li>
</ul>
@endif