@if($paginator->previousPageUrl() != '' || $paginator->nextPageUrl() != '')
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="{{ $paginator->previousPageUrl() }}" @if($paginator->previousPageUrl() == '')
        style="pointer-events: none;" @endif>
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="{{ $paginator->nextPageUrl() }}" @if($paginator->nextPageUrl() == '')
        style="pointer-events: none;" @endif>
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
@endif