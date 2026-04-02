<?php
    var search = document.getElementsByClassName('md-search_input')[0];
    var searchResults = document.getElementsByClassName('md-search-result__list')[0];
    searchResults.setAttribute('role', 'presentation');
    search.addEventListener('focus', (e) => {
        document.getElementsByClassName('md-search-result__list')[0]
            .setAttribute('role', 'list')
