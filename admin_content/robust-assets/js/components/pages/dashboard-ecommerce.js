$(window).on("load", function() {
    function a(a, b, c) {
        a.push(Math.floor(Math.random() * (c - b + 1)) + b), a.shift(), g.update()
    }
    $("#recent-orders").perfectScrollbar({
        wheelPropagation: !0
    }), require.config({
        paths: {
            echarts: base_url+"admin_content/robust-assets/js/plugins/charts/echarts"
        }
    }), require(["echarts", "echarts/charts/bar", "echarts/charts/pie", "echarts/charts/funnel", "echarts/charts/line"], function(a) {
        var b = a.init(document.getElementById("sales-campaigns"));
        chartOptions = {
            grid: {
                x: 40,
                x2: 40,
                y: 45,
                y2: 25
            },
            tooltip: {
                trigger: "axis",
                axisPointer: {
                    type: "shadow"
                }
            },
            legend: {
                data: ["Direct access", "Email marketing", "Advertising alliance", "Video ads", "Search engine"]
            },
            color: ["#48C9A9", "#97E1CE", "#F7C55F", "#FDDEA1", "#3BAFDA"],
            calculable: !0,
            xAxis: [{
                type: "category",
                data: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"]
            }],
            yAxis: [{
                type: "value"
            }],
            series: [{
                name: "Direct access",
                type: "bar",
                data: [320, 332, 301, 334, 390, 330, 320]
            }, {
                name: "Email marketing",
                type: "bar",
                stack: "advertising",
                data: [120, 132, 101, 134, 90, 230, 210]
            }, {
                name: "Advertising alliance",
                type: "bar",
                stack: "advertising",
                data: [220, 182, 191, 234, 290, 330, 310]
            }, {
                name: "Video ads",
                type: "bar",
                stack: "advertising",
                data: [150, 232, 201, 154, 190, 330, 410]
            }, {
                name: "Search engine",
                type: "bar",
                data: [862, 1018, 964, 1026, 1679, 1600, 1570],
                markLine: {
                    itemStyle: {
                        normal: {
                            lineStyle: {
                                type: "dashed"
                            }
                        }
                    },
                    data: [
                        [{
                            type: "min"
                        }, {
                            type: "max"
                        }]
                    ]
                }
            }]
        }, b.setOption(chartOptions), $(function() {
            function a() {
                setTimeout(function() {
                    b.resize()
                }, 200)
            }
            $(window).on("resize", a), $(".menu-toggle").on("click", a)
        });
        var c = a.init(document.getElementById("top-selling-phones-doughnut")),
            d = {
                title: {
                    text: "Top 5 Categories",
                    x: "center",
                    textStyle: {
                        color: "#FFF"
                    },
                    subtextStyle: {
                        color: "#FFF"
                    }
                },
                legend: {
                    orient: "vertical",
                    x: "left",
                    data: ["Moto Z", "Galaxy S7 Edge", "One Plus 3", "Mi 5", "iPhone 6s"],
                    textStyle: {
                        color: "#FFF"
                    }
                },
                color: ["#ffd322", "#ffa422", "#e89805", "#ffc107", "#fff306"],
                toolbox: {
                    show: !0,
                    orient: "vertical",
                    feature: {
                        magicType: {
                            show: !0,
                            title: {
                                pie: "Switch to pies",
                                funnel: "Switch to funnel"
                            },
                            type: ["pie", "funnel"],
                            option: {
                                funnel: {
                                    x: "25%",
                                    y: "20%",
                                    width: "50%",
                                    height: "70%",
                                    funnelAlign: "left",
                                    max: 1548
                                }
                            }
                        },
                        restore: {
                            show: !0,
                            title: "Restore"
                        },
                        saveAsImage: {
                            show: !0,
                            title: "Same as image",
                            lang: ["Save"]
                        }
                    },
                    color: "#FFF"
                },
                calculable: !0,
                series: [{
                    name: "Top Categories",
                    type: "pie",
                    radius: ["50%", "70%"],
                    center: ["50%", "57.5%"],
                    itemStyle: {
                        normal: {
                            label: {
                                show: !0,
                                textStyle: {
                                    color: "#FFF"
                                }
                            },
                            labelLine: {
                                show: !0,
                                lineStyle: {
                                    color: "#FFF"
                                }
                            }
                        },
                        emphasis: {
                            label: {
                                show: !0,
                                formatter: "{b}\n\n{c} ({d}%)",
                                position: "center",
                                textStyle: {
                                    fontSize: "17",
                                    fontWeight: "500"
                                }
                            }
                        }
                    },
                    data: [{
                        value: 335,
                        name: "Moto Z"
                    }, {
                        value: 618,
                        name: "Galaxy S7 Edge"
                    }, {
                        value: 234,
                        name: "One Plus 3"
                    }, {
                        value: 135,
                        name: "Mi 5"
                    }, {
                        value: 956,
                        name: "iPhone 6s"
                    }]
                }]
            };
        c.setOption(d), $(function() {
            function a() {
                setTimeout(function() {
                    c.resize()
                }, 200)
            }
            $(window).on("resize", a), $(".menu-toggle").on("click", a)
        });
        var e = a.init(document.getElementById("browser-stats")),
            f = 1,
            g = {
                timeline: {
                    x: 10,
                    x2: 10,
                    data: ["2014-01-01", "2014-02-01", "2014-03-01", "2014-04-01", "2014-05-01", {
                        name: "2014-06-01",
                        symbol: "emptyStar2",
                        symbolSize: 8
                    }, "2014-07-01", "2014-08-01", "2014-09-01", "2014-10-01", "2014-11-01", {
                        name: "2014-12-01",
                        symbol: "star2",
                        symbolSize: 8
                    }],
                    label: {
                        formatter: function(a) {
                            return a.slice(0, 7)
                        },
                        textStyle: {
                            color: "#FFF"
                        }
                    },
                    checkpointStyle: {
                        color: "#6C5B7B",
                        borderColor: "#FFF",
                        label: {
                            textStyle: {
                                color: "#FFF"
                            }
                        }
                    },
                    controlStyle: {
                        normal: {
                            color: "#FFF"
                        }
                    },
                    lineStyle: {
                        color: "#FFF",
                        width: 1,
                        type: "dashed"
                    },
                    autoPlay: !0,
                    playInterval: 3e3
                },
                options: [{
                    title: {
                        text: "Browser statistics",
                        x: "center",
                        textStyle: {
                            color: "#FFF"
                        },
                        subtextStyle: {
                            color: "#FFF"
                        }
                    },
                    tooltip: {
                        trigger: "item",
                        formatter: "{a} <br/>{b}: {c} ({d}%)"
                    },
                    legend: {
                        x: "left",
                        orient: "vertical",
                        data: ["Chrome", "Firefox", "Safari", "IE9+", "IE8-"],
                        textStyle: {
                            color: "#FFF"
                        }
                    },
                    color: ["#FECEA8", "#FF847C", "#F8AC6F", "#6C5B7B", "#99B898"],
                    toolbox: {
                        show: !0,
                        orient: "vertical",
                        feature: {
                            magicType: {
                                show: !0,
                                title: {
                                    pie: "Switch to pies",
                                    funnel: "Switch to funnel"
                                },
                                type: ["pie", "funnel"],
                                option: {
                                    funnel: {
                                        x: "25%",
                                        width: "50%",
                                        funnelAlign: "left",
                                        max: 1700
                                    }
                                }
                            },
                            restore: {
                                show: !0,
                                title: "Restore"
                            },
                            saveAsImage: {
                                show: !0,
                                title: "Same as image",
                                lang: ["Save"]
                            }
                        },
                        color: "#FFF"
                    },
                    series: [{
                        name: "Browser",
                        type: "pie",
                        center: ["50%", "50%"],
                        radius: "60%",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }],
                        itemStyle: {
                            normal: {
                                label: {
                                    textStyle: {
                                        color: "#FFF"
                                    }
                                },
                                labelLine: {
                                    lineStyle: {
                                        color: "#FFF"
                                    }
                                }
                            }
                        }
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }, {
                    series: [{
                        name: "Browser",
                        type: "pie",
                        data: [{
                            value: 128 * f + 80,
                            name: "Chrome"
                        }, {
                            value: 64 * f + 160,
                            name: "Firefox"
                        }, {
                            value: 32 * f + 320,
                            name: "Safari"
                        }, {
                            value: 16 * f + 640,
                            name: "IE9+"
                        }, {
                            value: 8 * f++ + 1280,
                            name: "IE8-"
                        }]
                    }]
                }]
            };
        e.setOption(g), $(function() {
            function a() {
                setTimeout(function() {
                    e.resize()
                }, 200)
            }
            $(window).on("resize", a), $(".menu-toggle").on("click", a)
        })
    });
    var b = document.getElementById("yearly-sales").getContext("2d"),
        c = b.createLinearGradient(0, 0, 0, 400);
    c.addColorStop(0, "rgba(248, 238, 44, 1)"), c.addColorStop(.6, "rgba(255, 162, 0, 1)"), c.addColorStop(1, "rgba(243, 97, 0, 1)");
    var d = {
            responsive: !0,
            maintainAspectRatio: !1,
            responsiveAnimationDuration: 500,
            legend: {
                display: !1,
                position: "top"
            },
            title: {
                display: !1,
                text: "Chart.js Bar Chart"
            },
            scales: {
                xAxes: [{
                    display: !0,
                    id: "barline",
                    categoryPercentage: .6,
                    stacked: !0,
                    gridLines: {
                        display: !1,
                        drawTicks: !1,
                        drawBorder: !1
                    },
                    ticks: {
                        fontSize: 14,
                        fontColor: "#FFF"
                    }
                }, {
                    display: !0,
                    type: "category",
                    id: "fmv",
                    categoryPercentage: .6,
                    gridLines: {
                        display: !1,
                        offsetGridLines: !0,
                        drawBorder: !1
                    },
                    stacked: !0,
                    ticks: {
                        fontSize: 14,
                        fontColor: "transparent"
                    }
                }],
                yAxes: [{
                    display: !0,
                    gridLines: {
                        lineWidth: 1,
                        color: "rgba(255,255,255, 0.2)",
                        zeroLineWidth: 0,
                        zeroLineColor: "transparent",
                        drawTicks: !1,
                        drawBorder: !1
                    },
                    ticks: {
                        fontColor: "#FFF",
                        min: 0,
                        max: 3e3
                    }
                }]
            }
        },
        e = {
            labels: ["2011", "2012", "2013", "2014", "2015", "2016"],
            datasets: [{
                type: "bar",
                xAxisID: "fmv",
                label: "My First dataset",
                data: [1459, 1265, 2047, 1878, 2312, 2289],
                backgroundColor: c,
                hoverBackgroundColor: c
            }, {
                type: "bar",
                xAxisID: "barline",
                label: "My Second dataset",
                data: [3e3, 3e3, 3e3, 3e3, 3e3, 3e3],
                backgroundColor: "rgba(0,0,0,0.10)",
                hoverBackgroundColor: "rgba(0,0,0,0.10)"
            }]
        },
        f = {
            type: "bar",
            options: d,
            data: e
        },
        g = new Chart(b, f);
    setInterval(function() {
        a(g.data.datasets[0].data, 1200, 2500)
    }, 3500), $("#world-map-markers").vectorMap({
        backgroundColor: "#FF5F3D",
        zoomOnScroll: !1,
        map: "world_mill",
        zoomOnScroll: !1,
        scaleColors: ["#C8EEFF", "#0071A4"],
        normalizeFunction: "polynomial",
        hoverOpacity: .7,
        hoverColor: !1,
        markerStyle: {
            initial: {
                fill: "#91EBD4",
                stroke: "#37BC9B",
                "stroke-width": 2
            },
            hover: {
                fill: "#37BC9B",
                stroke: "#37BC9B"
            },
            selected: {
                fill: "#37BC9B",
                stroke: "#37BC9B"
            },
            selectedHover: {
                fill: "#37BC9B",
                stroke: "#37BC9B"
            }
        },
        regionStyle: {
            initial: {
                fill: "#FFF0ED"
            },
            hover: {
                fill: "#FFCBC0"
            },
            selected: {
                fill: "#FFCBC0"
            },
            selectedHover: {
                fill: "#FFB4A4"
            }
        },
        markers: [{
            latLng: [51.52, -.14],
            name: "London"
        }, {
            latLng: [48.87, 2.34],
            name: "Paris"
        }, {
            latLng: [47.36, 8.53],
            name: "Switzerland"
        }, {
            latLng: [40.54, -3.77],
            name: "Spain"
        }, {
            latLng: [39.59, -105.19],
            name: "USA"
        }, {
            latLng: [19.67, -99.12],
            name: "Mexico"
        }, {
            latLng: [-8.37, -56.06],
            name: "Brazil"
        }, {
            latLng: [-31.17, -64.14],
            name: "Argentina"
        }, {
            latLng: [-26.2, 28.02],
            name: "Johanesburg"
        }, {
            latLng: [19.05, 72.87],
            name: "Mumbai"
        }, {
            latLng: [40.03, 116.46],
            name: "Beijing"
        }, {
            latLng: [31.27, 121.47],
            name: "Shanghai"
        }, {
            latLng: [35.739, 139.75],
            name: "Japan"
        }, {
            latLng: [-34.83, 138.6],
            name: "Adelaide"
        }, {
            latLng: [-37.77, 144.97],
            name: "Melbourne"
        }, {
            latLng: [1.3, 103.8],
            name: "Singapore"
        }, {
            latLng: [26.02, 50.55],
            name: "Bahrain"
        }]
    }), Morris.Line({
        element: "map-total-orders",
        data: [{
            y: "1",
            a: 14
        }, {
            y: "2",
            a: 12
        }, {
            y: "3",
            a: 4
        }, {
            y: "4",
            a: 13
        }, {
            y: "5",
            a: 9
        }, {
            y: "6",
            a: 14
        }, {
            y: "7",
            a: 12
        }, {
            y: "8",
            a: 20
        }],
        xkey: "y",
        ykeys: ["a"],
        labels: ["Likes"],
        axes: !1,
        grid: !1,
        behaveLikeLine: !0,
        ymax: 20,
        resize: !0,
        pointSize: 4,
        pointFillColors: ["#FFF"],
        pointStrokeColors: ["#FF6E40"],
        smooth: !1,
        numLines: 6,
        lineWidth: 2,
        lineColors: ["#FF6E40"],
        hideHover: "auto"
    }), Morris.Line({
        element: "map-total-profit",
        data: [{
            y: "1",
            a: 14
        }, {
            y: "2",
            a: 12
        }, {
            y: "3",
            a: 4
        }, {
            y: "4",
            a: 13
        }, {
            y: "5",
            a: 7
        }, {
            y: "6",
            a: 14
        }, {
            y: "7",
            a: 8
        }, {
            y: "8",
            a: 20
        }],
        xkey: "y",
        ykeys: ["a"],
        labels: ["Likes"],
        axes: !1,
        grid: !1,
        behaveLikeLine: !0,
        ymax: 20,
        resize: !0,
        pointSize: 4,
        pointFillColors: ["#FFF"],
        pointStrokeColors: ["#1DE9B6"],
        smooth: !1,
        numLines: 6,
        lineWidth: 2,
        lineColors: ["#1DE9B6"],
        hideHover: "auto"
    });
    var h = !1;
    "RTL" == $("html").data("textdirection") && (h = !0), h === !0 && $(".tweet-slider").attr("dir", "rtl"), h === !0 && $(".fb-post-slider").attr("dir", "rtl"), $(".tweet-slider").unslider({
        autoplay: !0,
        arrows: !1,
        nav: !1,
        infinite: !0
    }), $(".fb-post-slider").unslider({
        autoplay: !0,
        delay: 3500,
        arrows: !1,
        nav: !1,
        infinite: !0
    })
});