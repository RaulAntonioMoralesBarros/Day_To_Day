    <!--=================================================>
	<========================| JS |======================>
	<==================================================-->

    <script src="{{ URL::asset('../js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('../js/gijgo.min.js') }}"></script>
    <script src="{{ URL::asset('../js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('../js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('../js/Chart.min.js') }}"></script>
    <script src="{{ URL::asset('../js/shards.min.js') }}"></script>
    <script src="{{ URL::asset('../js/jquery.sharrre.min.js') }}"></script>
    <script src="{{ URL::asset('../scripts/extras.1.1.0.min.js') }}"></script>
    <script src="{{ URL::asset('../scripts/shards-dashboards.1.1.0.min.js') }}"></script>
    <script src="{{ URL::asset('../js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('../js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('../js/use-file-manager-list.js') }}"></script>
    <script src="{{ URL::asset('../js/quill.min.js') }}"></script>
    <script src="{{ URL::asset('../scripts/app/app-blog-new-post.1.1.0.js') }}"></script>
    <script src="{{ URL::asset('../js/bootstrap-tagsinput.min.js') }}"></script>
    <script>
        $("#input").datetimepicker({
            footer: true,
            modal: true
        });

    </script>
    <script>
        "use strict";
        ! function(t) {
            t("#transaction-history-date-range").datepicker({}), t(".transaction-history").DataTable({
                responsive: !0
            })
        }(jQuery);

    </script>
