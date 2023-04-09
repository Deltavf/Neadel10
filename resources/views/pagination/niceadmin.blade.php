<nav aria-label="Page navigation example">
  <ul class="pagination">
      <li class="page-item"><a class="page-link @if($paginator->previousPageUrl() == '') text-secondary @endif" @if($paginator->previousPageUrl() == '') style="pointer-events: none;" @endif href="{{ $paginator->previousPageUrl() }}" >Previous</a></li>
      <li class="page-item"><a class="page-link @if($paginator->nextPageUrl() == '') text-secondary @endif" @if($paginator->nextPageUrl() == '') style="pointer-events: none;" @endif  href="{{ $paginator->nextPageUrl() }}">Next</a></li>
  </ul>
</nav>