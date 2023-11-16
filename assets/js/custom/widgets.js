"use strict";

// Class definition
var KTWidgets = function () {
    // Stats widgets
    var initStatsWidget1 = function() {
        var element = document.querySelector("#kt_stats_widget_1_chart");

        if ( !element ) {
            return;
        }

        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var tooltipBgColor = KTUtil.getCssVariableValue('--bs-gray-200');
        var tooltipColor = KTUtil.getCssVariableValue('--bs-gray-800');

        var color1 = KTUtil.getCssVariableValue('--bs-success');
        var color2 = KTUtil.getCssVariableValue('--bs-warning');
        var color3 = KTUtil.getCssVariableValue('--bs-primary');

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [30, 40, 25],
                    backgroundColor: [color1, color2, color3]
                }],
                labels: ['Angular', 'CSS', 'HTML']
            },
            options: {
                chart: {
                    fontFamily: 'inherit'
                },
                cutout: '75%',
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: tooltipBgColor,
                    bodyFontColor: tooltipColor,
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        };

        var ctx = element.getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }

    var initStatsWidget2 = function(tabSelector, chartSelector, data1, data2, initByDefault) {
        var element = document.querySelector(chartSelector);
        var height = parseInt(KTUtil.css(element, 'height'));

        if (!element) {
            return;
        }

        var options = {
            series: [{
                name: 'Net Profit',
                data: data1
            }, {
                name: 'Revenue',
                data: data2
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'bar',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['40%'],
                    endingShape: 'rounded'
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: KTUtil.getCssVariableValue('--bs-gray-700'),
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: KTUtil.getCssVariableValue('--bs-gray-700'),
                        fontSize: '12px'
                    }
                }
            },
            fill: {
                opacity: 1
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function (val) {
                        return "$" + val + " thousands"
                    }
                }
            },
            colors: [KTUtil.getCssVariableValue('--bs-primary'), KTUtil.getCssVariableValue('--bs-light-primary')],
            grid: {
                borderColor: KTUtil.getCssVariableValue('--bs-gray-200'),
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };

        var chart = new ApexCharts(element, options);

        var init = false;
        var tab = document.querySelector(tabSelector);
        
        if (initByDefault === true) {
            chart.render();
            init = true;
        }        

        tab.addEventListener('shown.bs.tab', function (event) {
            if (init == false) {
                chart.render();
                init = true;
            }
        })
    }    

    // Form Widgets
    var initFormWidget1 = function() {
        var formEl = document.querySelector("#kt_forms_widget_1_form");
        var editorId = 'kt_forms_widget_1_editor';

        if ( !formEl ) {
            return;
        }

        // init editor
        var options = {
            modules: {
                toolbar: {
                    container: "#kt_forms_widget_1_editor_toolbar"
                }
            },
            placeholder: 'What is on your mind ?',
            theme: 'snow'
        };

        if (!formEl) {
            return;
        }

        // Init editor
        var editorObj = new Quill('#' + editorId, options);
    }
    
    // Mixed widgets
    var initMixedWidget1 = function() {
        var element = document.querySelector("#kt_mixed_widget_1_chart");
        var height = parseInt(KTUtil.css(element, 'height'));

        if ( !element ) {
            return;
        }

        var options = {
            series: [{
                name: 'Net Profit',
                data: [30, 30, 43, 43, 34, 34, 26, 26, 47, 47]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'area',
                height: height,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                }
            },
            plotOptions: {},
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'solid',
                opacity: 1
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 3,
                colors: ['#20D489', '']
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    show: false,
                    style: {
                        colors: '#A1A5B7',
                        fontSize: '12px',
                        
                    }
                },
                crosshairs: {
                    show: false,
                    position: 'front',
                    stroke: {
                        color: KTUtil.getCssVariableValue('--bs-primary'),
                        width: 1,
                        dashArray: 3
                    }
                },
                tooltip: {
                    enabled: true,
                    formatter: undefined,
                    offsetY: 0,
                    style: {
                        fontSize: '12px',
                        
                    }
                }
            },
            yaxis: {
                min: 0,
                max: 60,
                labels: {
                    show: false,
                    style: {
                        colors: '#A1A5B7',
                        fontSize: '12px',
                        
                    }
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px',
                    
                },
                y: {
                    formatter: function(val) {
                        return "$" + val + " thousands"
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.6,
                    stops: [0, 100]
                }
            },
            colors: [KTUtil.getCssVariableValue('--bs-primary')],
            markers: {
                colors: [KTUtil.getCssVariableValue('--bs-light-primary')],
                strokeColor: [KTUtil.getCssVariableValue('--bs-primary')],
                strokeWidth: 3
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();
    }

    var initMixedWidget2 = function() {
        var element = document.querySelector("#kt_mixed_widget_2_chart");
        var height = parseInt(KTUtil.css(element, 'height'));

        if ( !element ) {
            return;
        }

        var options = {
            series: [{
                name: 'Net Profit',
                data: [30, 30, 43, 43, 34, 34, 26, 26, 47, 47]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'area',
                height: height,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                }
            },
            plotOptions: {},
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'solid',
                opacity: 1
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 3,
                colors: [KTUtil.getCssVariableValue('--bs-info')]
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    show: false,
                    style: {
                        colors: '#A1A5B7',
                        fontSize: '12px'
                    }
                },
                crosshairs: {
                    show: false,
                    position: 'front',
                    stroke: {
                        color: '#E4E6EF',
                        width: 1,
                        dashArray: 3
                    }
                },
                tooltip: {
                    enabled: true,
                    formatter: undefined,
                    offsetY: 0,
                    style: {
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    show: false,
                    style: {
                        colors: '#A1A5B7',
                        fontSize: '12px'
                    }
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px',
                    
                },
                y: {
                    formatter: function(val) {
                        return "$" + val + " thousands"
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.6,
                    stops: [0, 100]
                }
            },
            colors: [KTUtil.getCssVariableValue('--bs-info')],
            markers: {
                colors: [KTUtil.getCssVariableValue('--bs-light-info')],
                strokeColor: [KTUtil.getCssVariableValue('--bs-info')],
                strokeWidth: 3
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();
    }    

    // Public methods
    return {
        init: function () {
            // Init Stats widgets
            initStatsWidget1();

            // Init Stats Widgets
            initStatsWidget2('#kt_stats_widget_2_tab_1', '#kt_stats_widget_2_chart_1', [44, 55, 57, 56, 61, 58], [76, 85, 101, 98, 87, 105], true);
            initStatsWidget2('#kt_stats_widget_2_tab_2', '#kt_stats_widget_2_chart_2', [35, 60, 35, 50, 45, 30], [65, 80, 50, 80, 75, 105], false);
            initStatsWidget2('#kt_stats_widget_2_tab_3', '#kt_stats_widget_2_chart_3', [25, 40, 45, 50, 40, 60], [76, 85, 101, 98, 87, 105], false);
            initStatsWidget2('#kt_stats_widget_2_tab_4', '#kt_stats_widget_2_chart_4', [50, 35, 45, 55, 30, 40], [76, 85, 101, 98, 87, 105], false);               

            // Init Mixed Widgets
            initMixedWidget1();
            initMixedWidget2();

            // Init Form Widgets
            initFormWidget1();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTWidgets.init();
});

