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


    {{-- estadisticas --}}
    <script>
        "use strict";
        ! function(e) {
            e(document).ready(function() {
                e("#blog-overview-date-range").datepicker({});
                [{
                    backgroundColor: "rgba(0, 184, 216, 0.1)",
                    borderColor: "rgb(0, 184, 216)",
                    data: [1, 2, 1, 3, 5, 4, 7]
                }, {
                    backgroundColor: "rgba(23,198,113,0.1)",
                    borderColor: "rgb(23,198,113)",
                    data: [1, 2, 3, 3, 3, 4, 4]
                }, {
                    backgroundColor: "rgba(255,180,0,0.1)",
                    borderColor: "rgb(255,180,0)",
                    data: [2, 3, 3, 3, 4, 3, 3]
                }, {
                    backgroundColor: "rgba(255,65,105,0.1)",
                    borderColor: "rgb(255,65,105)",
                    data: [1, 7, 1, 3, 1, 4, 8]
                }, {
                    backgroundColor: "rgb(0,123,255,0.1)",
                    borderColor: "rgb(0,123,255)",
                    data: [3, 2, 3, 2, 4, 5, 4]
                }].map(function(e, o) {
                    var a = {
                            maintainAspectRatio: !0,
                            responsive: !0,
                            legend: {
                                display: !1
                            },
                            tooltips: {
                                enabled: !1,
                                custom: !1
                            },
                            elements: {
                                point: {
                                    radius: 0
                                },
                                line: {
                                    tension: .3
                                }
                            },
                            scales: {
                                xAxes: [{
                                    gridLines: !1,
                                    scaleLabel: !1,
                                    ticks: {
                                        display: !1
                                    }
                                }],
                                yAxes: [{
                                    gridLines: !1,
                                    scaleLabel: !1,
                                    ticks: {
                                        display: !1,
                                        suggestedMax: Math.max.apply(Math, e.data) + 1
                                    }
                                }]
                            }
                        },
                        r = document.getElementsByClassName("blog-overview-stats-small-" + (o + 1));
                    new Chart(r, {
                        type: "line",
                        data: {
                            labels: ["asd", "Label 2", "Label 3", "Label 4", "Label 5",
                                "Label 6", "Label 7"
                            ],
                            datasets: [{
                                label: "Today",
                                fill: "start",
                                data: e.data,
                                backgroundColor: e.backgroundColor,
                                borderColor: e.borderColor,
                                borderWidth: 1.5
                            }]
                        },
                        options: a
                    })
                });
            })
        }(jQuery);

    </script>
    {{-- /estadisticas --}}