    <!--Basic Scripts-->
    <script src="assets/js/jquery-2.0.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="assets/js/beyond.min.js"></script>

    <!--Page Related Scripts-->
    <!--Sparkline Charts Needed Scripts-->
    <script src="assets/js/charts/sparkline/jquery.sparkline.js"></script>
    <script src="assets/js/charts/sparkline/sparkline-init.js"></script>

    <!--Easy Pie Charts Needed Scripts-->
    <script src="assets/js/charts/easypiechart/jquery.easypiechart.js"></script>
    <script src="assets/js/charts/easypiechart/easypiechart-init.js"></script>

    <!--Flot Charts Needed Scripts-->
    <script src="assets/js/charts/flot/jquery.flot.js"></script>
    <script src="assets/js/charts/flot/jquery.flot.resize.js"></script>
    <script src="assets/js/charts/flot/jquery.flot.pie.js"></script>
    <script src="assets/js/charts/flot/jquery.flot.tooltip.js"></script>
    <script src="assets/js/charts/flot/jquery.flot.orderBars.js"></script>

    <!--Bootstrap  wysiwig Scripts-->
    <script src="assets/js/editors/wysiwyg/jquery.hotkeys.js"></script>
    <script src="assets/js/editors/wysiwyg/prettify.js"></script>
    <script src="assets/js/editors/wysiwyg/bootstrap-wysiwyg.js"></script>
    <script>
        $(function () {
            function initToolbarBootstrapBindings() {
                var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                      'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                      'Times New Roman', 'Verdana'],
                      fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                $.each(fonts, function (idx, fontName) {
                    fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                });
                $('a[title]').tooltip({ container: 'body' });
                $('.dropdown-menu input').click(function () { return false; })
                    .change(function () { $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle'); })
                .keydown('esc', function () { this.value = ''; $(this).change(); });

                $('[data-role=magic-overlay]').each(function () {
                    var overlay = $(this), target = $(overlay.data('target'));
                    overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                });
                if ("onwebkitspeechchange" in document.createElement("input")) {
                    var editorOffset = $('#editor').offset();
                    $('#voiceBtn').css('position', 'absolute').offset({ top: editorOffset.top, left: editorOffset.left + $('#editor').innerWidth() - 35 });
                } else {
                    $('#voiceBtn').hide();
                }
            };
            function showErrorAlert(reason, detail) {
                var msg = '';
                if (reason === 'unsupported-file-type') { msg = "Unsupported format " + detail; }
                else {
                    console.log("error uploading file", reason, detail);
                }
                $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                 '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
            };
            initToolbarBootstrapBindings();
            $('.wysiwyg-editor').wysiwyg({ fileUploadError: showErrorAlert });
            window.prettyPrint && prettyPrint();
        });
    </script>

    <!--Summernote Scripts-->
    <script src="assets/js/editors/summernote/summernote.js"></script>
    <script>
        $('#summernote').summernote({ height: 300 });
        $('#summernote1').summernote({ height: 300 });
    </script>
    <script src="assets/js/wysihtml.min.js"></script>
    <script src="assets/js/bootstrap-wysihtml.js"></script>
    <script>
        //Wysihtml Editor
        $('#editor1').wysihtml5();
        $('#editor2').wysihtml5();
    </script>
    <script>
        // If you want to draw your charts with Theme colors you must run initiating charts after that current skin is loaded
        $(window).bind("load", function () {

            /*Sets Themed Colors Based on Themes*/
            themeprimary = getThemeColorFromCss('themeprimary');
            themesecondary = getThemeColorFromCss('themesecondary');
            themethirdcolor = getThemeColorFromCss('themethirdcolor');
            themefourthcolor = getThemeColorFromCss('themefourthcolor');
            themefifthcolor = getThemeColorFromCss('themefifthcolor');

            //Sets The Hidden Chart Width
            $('#dashboard-bandwidth-chart')
                .data('width', $('.box-tabbs')
                    .width() - 20);

            //-------------------------Visitor Sources Pie Chart----------------------------------------//
            var data = [
                {
                    data: [[1, 21]],
                    color: '#fb6e52'
                },
                {
                    data: [[1, 12]],
                    color: '#e75b8d'
                },
                {
                    data: [[1, 11]],
                    color: '#a0d468'
                },
                {
                    data: [[1, 10]],
                    color: '#ffce55'
                },
                {
                    data: [[1, 46]],
                    color: '#5db2ff'
                }
            ];
            var placeholder = $("#dashboard-pie-chart-sources");
            placeholder.unbind();

            $.plot(placeholder, data, {
                series: {
                    pie: {
                        innerRadius: 0.45,
                        show: true,
                        stroke: {
                            width: 4
                        }
                    }
                }
            });

            //------------------------------Visit Chart------------------------------------------------//
            var data2 = [{
                color: themesecondary,
                label: "Direct Visits",
                data: [[3, 2], [4, 5], [5, 4], [6, 11], [7, 12], [8, 11], [9, 8], [10, 14], [11, 12], [12, 16], [13, 9],
                [14, 10], [15, 14], [16, 15], [17, 9]],

                lines: {
                    show: true,
                    fill: true,
                    lineWidth: .1,
                    fillColor: {
                        colors: [{
                            opacity: 0
                        }, {
                            opacity: 0.4
                        }]
                    }
                },
                points: {
                    show: false
                },
                shadowSize: 0
            },
                {
                    color: themeprimary,
                    label: "Referral Visits",
                    data: [[3, 10], [4, 13], [5, 12], [6, 16], [7, 19], [8, 19], [9, 24], [10, 19], [11, 18], [12, 21], [13, 17],
                    [14, 14], [15, 12], [16, 14], [17, 15]],
                    bars: {
                        order: 1,
                        show: true,
                        borderWidth: 0,
                        barWidth: 0.4,
                        lineWidth: .5,
                        fillColor: {
                            colors: [{
                                opacity: 0.4
                            }, {
                                opacity: 1
                            }]
                        }
                    }
                },
                {
                    color: themethirdcolor,
                    label: "Search Engines",
                    data: [[3, 14], [4, 11], [5, 10], [6, 9], [7, 5], [8, 8], [9, 5], [10, 6], [11, 4], [12, 7], [13, 4],
                    [14, 3], [15, 4], [16, 6], [17, 4]],
                    lines: {
                        show: true,
                        fill: false,
                        fillColor: {
                            colors: [{
                                opacity: 0.3
                            }, {
                                opacity: 0
                            }]
                        }
                    },
                    points: {
                        show: true
                    }
                }
            ];
            var options = {
                legend: {
                    show: false
                },
                xaxis: {
                    tickDecimals: 0,
                    color: '#f3f3f3'
                },
                yaxis: {
                    min: 0,
                    color: '#f3f3f3',
                    tickFormatter: function (val, axis) {
                        return "";
                    },
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false,
                    color: '#fbfbfb'

                },
                tooltip: true,
                tooltipOpts: {
                    defaultTheme: false,
                    content: " <b>%x May</b> , <b>%s</b> : <span>%y</span>",
                }
            };
            var placeholder = $("#dashboard-chart-visits");
            var plot = $.plot(placeholder, data2, options);

            //------------------------------Real-Time Chart-------------------------------------------//
            var realTimedata = [],
                realTimedata2 = [],
                totalPoints = 300;

            var getSeriesObj = function () {
                return [
                {
                    data: getRandomData(),
                    lines: {
                        show: true,
                        lineWidth: 1,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: 0
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }, {
                    data: getRandomData2(),
                    lines: {
                        lineWidth: 0,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: .5
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }
                ];
            };
            function getRandomData() {
                if (realTimedata.length > 0)
                    realTimedata = realTimedata.slice(1);

                // Do a random walk

                while (realTimedata.length < totalPoints) {

                    var prev = realTimedata.length > 0 ? realTimedata[realTimedata.length - 1] : 50,
                        y = prev + Math.random() * 10 - 5;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }
                    realTimedata.push(y);
                }

                // Zip the generated y values with the x values

                var res = [];
                for (var i = 0; i < realTimedata.length; ++i) {
                    res.push([i, realTimedata[i]]);
                }

                return res;
            }
            function getRandomData2() {
                if (realTimedata2.length > 0)
                    realTimedata2 = realTimedata2.slice(1);

                // Do a random walk

                while (realTimedata2.length < totalPoints) {

                    var prev = realTimedata2.length > 0 ? realTimedata[realTimedata2.length] : 50,
                        y = prev - 25;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }
                    realTimedata2.push(y);
                }


                var res = [];
                for (var i = 0; i < realTimedata2.length; ++i) {
                    res.push([i, realTimedata2[i]]);
                }

                return res;
            }
            // Set up the control widget
            var updateInterval = 500;
            var plot = $.plot("#dashboard-chart-realtime", getSeriesObj(), {
                yaxis: {
                    color: '#f3f3f3',
                    min: 0,
                    max: 100,
                    tickFormatter: function (val, axis) {
                        return "";
                    }
                },
                xaxis: {
                    color: '#f3f3f3',
                    min: 0,
                    max: 100,
                    tickFormatter: function (val, axis) {
                        return "";
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false
                },
                colors: ['#eee', themeprimary],
            });

            function update() {

                plot.setData(getSeriesObj());

                plot.draw();
                setTimeout(update, updateInterval);
            }
            update();


            //-------------------------Initiates Easy Pie Chart instances in page--------------------//
            InitiateEasyPieChart.init();

            //-------------------------Initiates Sparkline Chart instances in page------------------//
            InitiateSparklineCharts.init();
        });

    </script>

    <!--Jquery Select2-->
    <script src="assets/js/select2/select2.js"></script>
    <!--Bootstrap Tags Input-->
    <script src="assets/js/tagsinput/bootstrap-tagsinput.js"></script>

    <!--Bootstrap Date Picker-->
    <script src="assets/js/datetime/bootstrap-datepicker.js"></script>

    <!--Bootstrap Time Picker-->
    <script src="assets/js/datetime/bootstrap-timepicker.js"></script>

    <!--Bootstrap Date Range Picker-->
    <script src="assets/js/datetime/moment.js"></script>
    <script src="assets/js/datetime/daterangepicker.js"></script>

    <script>
        //--Jquery Select2--
        $("#e1").select2();
        $("#e2").select2();
        $("#e3").select2();
        $("#e4").select2();
        $("#e5").select2();
        $("#e6").select2();
        $("#e7").select2();
        $("#e8").select2({
            placeholder: "Select a State",
            allowClear: true
        });

        //--Bootstrap Date Picker--
        $('.date-picker').datepicker();

        //--Bootstrap Time Picker--
        $('#timepicker1').timepicker();

        //--Bootstrap Date Range Picker--
        $('#reservation').daterangepicker();
        
        var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
        $("#dateRulersExample").dateRangeSlider({
            bounds: { min: new Date(2012, 0, 1), max: new Date(2012, 11, 31, 12, 59, 59) },
            defaultValues: { min: new Date(2012, 1, 10), max: new Date(2012, 4, 22) },
            scales: [{
                first: function (value) { return value; },
                end: function (value) { return value; },
                next: function (value) {
                    var next = new Date(value);
                    return new Date(next.setMonth(value.getMonth() + 1));
                },
                label: function (value) {
                    return months[value.getMonth()];
                },
                format: function (tickContainer, tickStart, tickEnd) {
                    tickContainer.addClass("myCustomClass");
                }
            }]
        });
    </script>

    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.html', 'ga');

        ga('create', 'UA-52103994-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script src="assets/js/datatable/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/ZeroClipboard.js"></script>
    <script src="assets/js/datatable/dataTables.tableTools.min.js"></script>
    <script src="assets/js/datatable/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/datatable/datatables-init.js"></script>
    <script>
        InitiateSimpleDataTable.init();
        InitiateEditableDataTable.init();
        InitiateExpandableDataTable.init();
        InitiateSearchableDataTable.init();
    </script>
    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.html', 'ga');

        ga('create', 'UA-52103994-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
<!--  /Body -->
</html>