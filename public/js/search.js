var route = "{{ url('autocomplete-search') }}";
$('#search').typeahead({
    source: function (query, process) {
        return $.get(route, {
            query: query
        }, function (data) {
            return process(data);
        });
    }
});
