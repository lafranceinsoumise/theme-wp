<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
  <div class="input-group">
    <input type="search" class="search-field" placeholder="Rechercher..." value="{{ get_search_query() }}" name="s" aria-label="Rechercher">
    <div class="input-group-append">
      <button type="submit" class="search-submit" value="">
        <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7 13.3L10.89 9.47C11.59 8.49 12 7.3 12 6C12 2.69 9.31 0 6 0C2.69 0 0 2.69 0 6C0 9.31 2.69 12 6 12C7.3 12 8.48 11.59 9.47 10.89L13.3 14.7C13.49 14.9 13.75 15 14 15C14.25 15 14.52 14.91 14.7 14.7C15.09 14.31 15.09 13.68 14.7 13.29V13.3ZM5.99999 10.7C3.40999 10.7 1.29999 8.59 1.29999 6C1.29999 3.41 3.40999 1.3 5.99999 1.3C8.58999 1.3 10.7 3.41 10.7 6C10.7 8.59 8.58999 10.7 5.99999 10.7Z" fill="currentColor"/>
        </svg>
      </button>
    </div>
  </div>
</form>
