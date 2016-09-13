				
			</div><!-- /page content -->
			<!-- footer content -->
			<footer>
			  <div class="pull-right">
				&copy; RepuSight All Rights Reserved  Design and Developed By  <a href="">Kijag</a>
			  </div>
			  <div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
		<!-- jQuery -->
		<script src="./vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="./vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="./vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="./vendors/nprogress/nprogress.js"></script>
		<!-- Chart.js -->
		<script src="./vendors/Chart.js/dist/Chart.min.js"></script>
		<script src="./js/jquery.svgDoughnutChart.js"></script>
		<!-- morris.js -->
		<script src="./vendors/raphael/raphael.min.js"></script>
		<script src="./vendors/morris.js/morris.min.js"></script>
		<!-- bootstrap-daterangepicker -->
		<script src="./js/moment/moment.min.js"></script>
		<script src="./js/datepicker/daterangepicker.js"></script>
		<!-- Chart.js -->
		 <!-- ECharts -->
		<script src="./vendors/echarts/dist/echarts.min.js"></script>
		<script src="./vendors/echarts/map/js/world.js"></script>
		<!-- iCheck -->
		<script src="./vendors/iCheck/icheck.min.js"></script>
		<!-- Datatables -->
		<script src="./vendors/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="./vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<script src="./vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
		<script src="./vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
		<script src="./vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
		<script src="./vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
		<script src="./vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
		<script src="./vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
		<script src="./vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
		<script src="./vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
		<script src="./vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
		<script src="./vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
		<script src="./vendors/jszip/dist/jszip.min.js"></script>
		<script src="./vendors/pdfmake/build/pdfmake.min.js"></script>
		<script src="./vendors/pdfmake/build/vfs_fonts.js"></script>
				<!-- Custom Theme Scripts -->
		<script src="./build/js/custom.min.js"></script>
		<!-- bootstrap-wysiwyg -->
		<script src="./vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
		<script src="./vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
		<script src="./vendors/google-code-prettify/src/prettify.js"></script>
		<!-- jQuery Tags Input -->
		<script src="./vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
		<!-- Switchery -->
		<script src="./vendors/switchery/dist/switchery.min.js"></script>
		<!-- Select2 -->
		<script src="./vendors/select2/dist/js/select2.full.min.js"></script>
		<!-- Parsley -->
		<script src="./vendors/parsleyjs/dist/parsley.min.js"></script>
		<!-- Autosize -->
		<script src="./vendors/autosize/dist/autosize.min.js"></script>
		<!-- jQuery autocomplete -->
		<script src="./vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
		<!-- starrr -->
		<script src="./vendors/starrr/dist/starrr.js"></script>
		<!-- Custom Theme Scripts -->
		<!-- validator -->
		<script src="./vendors/validator/validator.js"></script>
		
	
	
		<script>
		  Chart.defaults.global.legend = {
			enabled: false
		  };

		  // Line chart
		  var ctx = document.getElementById("lineChart");
		  var lineChart = new Chart(ctx, {
			type: 'line',
			data: {
			  
			  labels: ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","51","52"],
			  datasets: [{
			
				label: "My Third dataset",
				backgroundColor: "transparent",
				borderColor: "rgba(3, 88, 106, 0.70)",
				pointBorderColor: "rgba(3, 88, 106, 0.70)",
				pointBackgroundColor: "transparent",
				pointHoverBackgroundColor: "#fff",
				pointHoverBorderColor: "rgba(151,187,205,1)",
				pointBorderWidth: 2,
				data: [81, 23, 66, 59, 99,26, 43, 42,48, 23, 66, 94, 99,16,56,76,89,23,21,12,43,65,12,34,12, 42, 42,83, 23, 66, 59, 99,46, 34, 22,85, 23, 66, 59, 99,66, 49, 12,98, 23, 66, 94, 99,46, 24, 24,38, 23,90]
			  }]
			},
		  });
		</script>
		<script>
		// Doughnut chart
      var ctx = document.getElementById("canvasDoughnut");
      var data = {
        labels: [
          "Dark Grey",
          "Purple Color",
          "Gray Color",
          "Green Color",
          "Blue Color"
        ],
        datasets: [{
          data: [120, 50, 140, 180, 100],
          backgroundColor: [
            "#455C73",
            "#9B59B6",
            "#BDC3C7",
            "#26B99A",
            "#3498DB"
          ],
          hoverBackgroundColor: [
            "#34495E",
            "#B370CF",
            "#CFD4D8",
            "#36CAAB",
            "#49A9EA"
          ]

        }]
      };

      var canvasDoughnut = new Chart(ctx, {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: data
      });
		</script>
	
		<script>
		  $(document).ready(function() {
			var data1 = [
			  [gd(2012, 1, 1), 17],
			  [gd(2012, 1, 2), 74],
			  [gd(2012, 1, 3), 6],
			  [gd(2012, 1, 4), 39],
			  [gd(2012, 1, 5), 20],
			  [gd(2012, 1, 6), 85],
			  [gd(2012, 1, 7), 7]
			];

			var data2 = [
			  [gd(2012, 1, 1), 82],
			  [gd(2012, 1, 2), 23],
			  [gd(2012, 1, 3), 66],
			  [gd(2012, 1, 4), 9],
			  [gd(2012, 1, 5), 119],
			  [gd(2012, 1, 6), 6],
			  [gd(2012, 1, 7), 9]
			];
			$("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
			  data1, data2
			], {
			  series: {
				lines: {
				  show: false,
				  fill: true
				},
				splines: {
				  show: true,
				  tension: 0.4,
				  lineWidth: 1,
				  fill: 0.4
				},
				points: {
				  radius: 0,
				  show: true
				},
				shadowSize: 2
			  },
			  grid: {
				verticalLines: true,
				hoverable: true,
				clickable: true,
				tickColor: "#d5d5d5",
				borderWidth: 1,
				color: '#fff'
			  },
			  colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
			  xaxis: {
				tickColor: "rgba(51, 51, 51, 0.06)",
				mode: "time",
				tickSize: [1, "day"],
				//tickLength: 10,
				axisLabel: "Date",
				axisLabelUseCanvas: true,
				axisLabelFontSizePixels: 12,
				axisLabelFontFamily: 'Verdana, Arial',
				axisLabelPadding: 10
			  },
			  yaxis: {
				ticks: 8,
				tickColor: "rgba(51, 51, 51, 0.06)",
			  },
			  tooltip: false
			});

			function gd(year, month, day) {
			  return new Date(year, month - 1, day).getTime();
			}
		  });
		</script>
		<!-- /Flot -->
		
		<script>
		  $(document).ready(function() {
			var handleDataTableButtons = function() {
			  if ($("#datatable-buttons").length) {
				$("#datatable-buttons").DataTable({
				  dom: "Bfrtip",
				  buttons: [
					{
					  extend: "copy",
					  className: "btn-sm"
					},
					{
					  extend: "csv",
					  className: "btn-sm"
					},
					{
					  extend: "excel",
					  className: "btn-sm"
					},
					{
					  extend: "pdfHtml5",
					  className: "btn-sm"
					},
					{
					  extend: "print",
					  className: "btn-sm"
					},
				  ],
				  responsive: true
				});
			  }
			};

			TableManageButtons = function() {
			  "use strict";
			  return {
				init: function() {
				  handleDataTableButtons();
				}
			  };
			}();

			$('#datatable').dataTable();

			$('#datatable-keytable').DataTable({
			  keys: true
			});

			$('#datatable-responsive').DataTable();

			$('#datatable-scroller').DataTable({
			  ajax: "js/datatables/json/scroller-demo.json",
			  deferRender: true,
			  scrollY: 380,
			  scrollCollapse: true,
			  scroller: true
			});

			$('#datatable-fixed-header').DataTable({
			  fixedHeader: true
			});

			var $datatable = $('#datatable-checkbox');

			$datatable.dataTable({
			  'order': [[ 1, 'asc' ]],
			  'columnDefs': [
				{ orderable: false, targets: [0] }
			  ]
			});
			$datatable.on('draw.dt', function() {
			  $('input').iCheck({
				checkboxClass: 'icheckbox_flat-green'
			  });
			});

			TableManageButtons.init();
		  });
		</script>
			<!-- /Datatables -->
		<script>
		var theme = {
          color: [
              '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
              '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
          ],

          title: {
              itemGap: 8,
              textStyle: {
                  fontWeight: 'normal',
                  color: '#408829'
              }
          },

          dataRange: {
              color: ['#1f610a', '#97b58d']
          },

          toolbox: {
              color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
              backgroundColor: 'rgba(0,0,0,0.5)',
              axisPointer: {
                  type: 'line',
                  lineStyle: {
                      color: '#408829',
                      type: 'dashed'
                  },
                  crossStyle: {
                      color: '#408829'
                  },
                  shadowStyle: {
                      color: 'rgba(200,200,200,0.3)'
                  }
              }
          },

          dataZoom: {
              dataBackgroundColor: '#eee',
              fillerColor: 'rgba(64,136,41,0.2)',
              handleColor: '#408829'
          },
          grid: {
              borderWidth: 0
          },

          categoryAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },

          valueAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitArea: {
                  show: true,
                  areaStyle: {
                      color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },
          timeline: {
              lineStyle: {
                  color: '#408829'
              },
              controlStyle: {
                  normal: {color: '#408829'},
                  emphasis: {color: '#408829'}
              }
          },

          k: {
              itemStyle: {
                  normal: {
                      color: '#68a54a',
                      color0: '#a9cba2',
                      lineStyle: {
                          width: 1,
                          color: '#408829',
                          color0: '#86b379'
                      }
                  }
              }
          },
          map: {
              itemStyle: {
                  normal: {
                      areaStyle: {
                          color: '#ddd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  },
                  emphasis: {
                      areaStyle: {
                          color: '#99d2dd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  }
              }
          },
          force: {
              itemStyle: {
                  normal: {
                      linkStyle: {
                          strokeColor: '#408829'
                      }
                  }
              }
          },
          chord: {
              padding: 4,
              itemStyle: {
                  normal: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  },
                  emphasis: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  }
              }
			},
			gauge: {
				startAngle: 225,
              endAngle: -45,
              axisLine: {
                  show: true,
                  lineStyle: {
                      color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                      width: 8
                  }
              },
              axisTick: {
                  splitNumber: 10,
                  length: 12,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              axisLabel: {
                  textStyle: {
                      color: 'auto'
                  }
              },
              splitLine: {
                  length: 18,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              pointer: {
                  length: '90%',
                  color: 'auto'
              },
              title: {
                  textStyle: {
                      color: '#333'
                  }
              },
              detail: {
                  textStyle: {
                      color: 'auto'
                  }
              }
          },
          textStyle: {
              fontFamily: 'Arial, Verdana, sans-serif'
          }
		};

		var echartGauge = echarts.init(document.getElementById('echart_guage'), theme);

		echartGauge.setOption({
        tooltip: {
          formatter: "{a} <br/>{b} : {c}%"
        },
        /*toolbox: {
          show: true,
          feature: {
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },*/
        series: [{
          name: 'Outstanding',
          type: 'gauge',
          center: ['50%', '50%'],
          startAngle: 140,
          endAngle: -140,
          min: 0,
          max: 100,
          precision: 0,
          splitNumber: 10,
          axisLine: {
            show: true,
            lineStyle: {
              color: [
                [0.2, '#ff4500'],
                [0.4, 'skyblue'],
                [0.8, '#ffff00'],
                [1, 'lightgreen']
              ],
              width: 30
            }
          },
          axisTick: {
            show: true,
            splitNumber: 5,
            length: 8,
            lineStyle: {
              color: '#eee',
              width: 1,
              type: 'solid'
            }
          },
          axisLabel: {
            show: true,
            formatter: function(v) {
              switch (v + '') {
                case '10':
                  return 'a';
                case '30':
                  return 'b';
                case '60':
                  return 'c';
                case '90':
                  return 'd';
                default:
                  return '';
              }
            },
            textStyle: {
              color: '#333'
            }
          },
          splitLine: {
            show: true,
            length: 30,
            lineStyle: {
              color: '#eee',
              width: 2,
              type: 'solid'
            }
          },
          pointer: {
            length: '80%',
            width: 8,
            color: 'auto'
          },
          title: {
            show: true,
            offsetCenter: ['-65%', -10],
            textStyle: {
              color: '#333',
              fontSize: 15
            }
          },
          detail: {
            show: true,
            backgroundColor: 'rgba(0,0,0,0)',
            borderWidth: 0,
            borderColor: '#ccc',
            width: 100,
            height: 40,
            offsetCenter: ['-60%', 10],
            formatter: '{value}%',
            textStyle: {
              color: 'auto',
              fontSize: 30
            }
          },
          data: [{
            value: 90,
            name: 'Outstanding'
          }]
			}]
		});
		
		Morris.Donut({
  
          element: 'graph_donut',
          data: [
            {label: 'Neutral', value: 25},
            {label: 'Negative', value: 40},
            {label: 'Positive', value: 10}
          ],
          colors: ['#90ee90', '#ff4500','#ffff00'],
          formatter: function (y) {
            return y + "%";
          },
          resize: true
        });
			Morris.Donut({
          element: 'graph_donut1',
          data: [
            {label: 'Neutral', value: 25},
            {label: 'Negative', value: 40},
            {label: 'Positive', value: 10}
          ],
          colors: ['#90ee90', '#ff4500','#ffff00'],
          formatter: function (y) {
            return y + "%";
          },
          resize: true
        });
		  Chart.defaults.global.legend = {
        enabled: false
      };
  
		

		
	
     
			</script>
		
		  <!-- bootstrap-wysiwyg -->
    <script>
      $(document).ready(function() {
        function initToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function(idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
          });
          $('a[title]').tooltip({
            container: 'body'
          });
          $('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              $(this).change();
            });

          $('[data-role=magic-overlay]').each(function() {
            var overlay = $(this),
              target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = $('#editor').offset();

            $('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + $('#editor').innerWidth() - 35
            });
          } else {
            $('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
          } else {
            console.log("error uploading file", reason, detail);
          }
          $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
          fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
      });
    </script>
    <!-- /bootstrap-wysiwyg -->

    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a state",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->
		 <!-- jQuery Tags Input -->
    <script>
      function onAddTag(tag) {
        alert("Added a tag: " + tag);
      }

      function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
      }

      function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
      }

      $(document).ready(function() {
        $('#tags_1').tagsInput({
          width: 'auto'
        });
      });
    </script>
    <!-- /jQuery Tags Input -->

    <!-- Parsley -->
    <script>
      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form .btn').on('click', function() {
          $('#demo-form').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });

      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form2 .btn').on('click', function() {
          $('#demo-form2').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form2').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });
      try {
        hljs.initHighlightingOnLoad();
      } catch (err) {}
    </script>
    <!-- /Parsley -->

    <!-- Autosize -->
    <script>
      $(document).ready(function() {
        autosize($('.resizable_textarea'));
      });
    </script>
    <!-- /Autosize -->
		<!-- jQuery autocomplete -->
    <script>
      $(document).ready(function() {
        var countries = { AD:"Andorra",A2:"Andorra Test",AE:"United Arab Emirates",AF:"Afghanistan",AG:"Antigua and Barbuda",AI:"Anguilla",AL:"Albania",AM:"Armenia",AN:"Netherlands Antilles",AO:"Angola",AQ:"Antarctica",AR:"Argentina",AS:"American Samoa",AT:"Austria",AU:"Australia",AW:"Aruba",AX:"Åland Islands",AZ:"Azerbaijan",BA:"Bosnia and Herzegovina",BB:"Barbados",BD:"Bangladesh",BE:"Belgium",BF:"Burkina Faso",BG:"Bulgaria",BH:"Bahrain",BI:"Burundi",BJ:"Benin",BL:"Saint Barthélemy",BM:"Bermuda",BN:"Brunei",BO:"Bolivia",BQ:"British Antarctic Territory",BR:"Brazil",BS:"Bahamas",BT:"Bhutan",BV:"Bouvet Island",BW:"Botswana",BY:"Belarus",BZ:"Belize",CA:"Canada",CC:"Cocos [Keeling] Islands",CD:"Congo - Kinshasa",CF:"Central African Republic",CG:"Congo - Brazzaville",CH:"Switzerland",CI:"Côte d’Ivoire",CK:"Cook Islands",CL:"Chile",CM:"Cameroon",CN:"China",CO:"Colombia",CR:"Costa Rica",CS:"Serbia and Montenegro",CT:"Canton and Enderbury Islands",CU:"Cuba",CV:"Cape Verde",CX:"Christmas Island",CY:"Cyprus",CZ:"Czech Republic",DD:"East Germany",DE:"Germany",DJ:"Djibouti",DK:"Denmark",DM:"Dominica",DO:"Dominican Republic",DZ:"Algeria",EC:"Ecuador",EE:"Estonia",EG:"Egypt",EH:"Western Sahara",ER:"Eritrea",ES:"Spain",ET:"Ethiopia",FI:"Finland",FJ:"Fiji",FK:"Falkland Islands",FM:"Micronesia",FO:"Faroe Islands",FQ:"French Southern and Antarctic Territories",FR:"France",FX:"Metropolitan France",GA:"Gabon",GB:"United Kingdom",GD:"Grenada",GE:"Georgia",GF:"French Guiana",GG:"Guernsey",GH:"Ghana",GI:"Gibraltar",GL:"Greenland",GM:"Gambia",GN:"Guinea",GP:"Guadeloupe",GQ:"Equatorial Guinea",GR:"Greece",GS:"South Georgia and the South Sandwich Islands",GT:"Guatemala",GU:"Guam",GW:"Guinea-Bissau",GY:"Guyana",HK:"Hong Kong SAR China",HM:"Heard Island and McDonald Islands",HN:"Honduras",HR:"Croatia",HT:"Haiti",HU:"Hungary",ID:"Indonesia",IE:"Ireland",IL:"Israel",IM:"Isle of Man",IN:"India",IO:"British Indian Ocean Territory",IQ:"Iraq",IR:"Iran",IS:"Iceland",IT:"Italy",JE:"Jersey",JM:"Jamaica",JO:"Jordan",JP:"Japan",JT:"Johnston Island",KE:"Kenya",KG:"Kyrgyzstan",KH:"Cambodia",KI:"Kiribati",KM:"Comoros",KN:"Saint Kitts and Nevis",KP:"North Korea",KR:"South Korea",KW:"Kuwait",KY:"Cayman Islands",KZ:"Kazakhstan",LA:"Laos",LB:"Lebanon",LC:"Saint Lucia",LI:"Liechtenstein",LK:"Sri Lanka",LR:"Liberia",LS:"Lesotho",LT:"Lithuania",LU:"Luxembourg",LV:"Latvia",LY:"Libya",MA:"Morocco",MC:"Monaco",MD:"Moldova",ME:"Montenegro",MF:"Saint Martin",MG:"Madagascar",MH:"Marshall Islands",MI:"Midway Islands",MK:"Macedonia",ML:"Mali",MM:"Myanmar [Burma]",MN:"Mongolia",MO:"Macau SAR China",MP:"Northern Mariana Islands",MQ:"Martinique",MR:"Mauritania",MS:"Montserrat",MT:"Malta",MU:"Mauritius",MV:"Maldives",MW:"Malawi",MX:"Mexico",MY:"Malaysia",MZ:"Mozambique",NA:"Namibia",NC:"New Caledonia",NE:"Niger",NF:"Norfolk Island",NG:"Nigeria",NI:"Nicaragua",NL:"Netherlands",NO:"Norway",NP:"Nepal",NQ:"Dronning Maud Land",NR:"Nauru",NT:"Neutral Zone",NU:"Niue",NZ:"New Zealand",OM:"Oman",PA:"Panama",PC:"Pacific Islands Trust Territory",PE:"Peru",PF:"French Polynesia",PG:"Papua New Guinea",PH:"Philippines",PK:"Pakistan",PL:"Poland",PM:"Saint Pierre and Miquelon",PN:"Pitcairn Islands",PR:"Puerto Rico",PS:"Palestinian Territories",PT:"Portugal",PU:"U.S. Miscellaneous Pacific Islands",PW:"Palau",PY:"Paraguay",PZ:"Panama Canal Zone",QA:"Qatar",RE:"Réunion",RO:"Romania",RS:"Serbia",RU:"Russia",RW:"Rwanda",SA:"Saudi Arabia",SB:"Solomon Islands",SC:"Seychelles",SD:"Sudan",SE:"Sweden",SG:"Singapore",SH:"Saint Helena",SI:"Slovenia",SJ:"Svalbard and Jan Mayen",SK:"Slovakia",SL:"Sierra Leone",SM:"San Marino",SN:"Senegal",SO:"Somalia",SR:"Suriname",ST:"São Tomé and Príncipe",SU:"Union of Soviet Socialist Republics",SV:"El Salvador",SY:"Syria",SZ:"Swaziland",TC:"Turks and Caicos Islands",TD:"Chad",TF:"French Southern Territories",TG:"Togo",TH:"Thailand",TJ:"Tajikistan",TK:"Tokelau",TL:"Timor-Leste",TM:"Turkmenistan",TN:"Tunisia",TO:"Tonga",TR:"Turkey",TT:"Trinidad and Tobago",TV:"Tuvalu",TW:"Taiwan",TZ:"Tanzania",UA:"Ukraine",UG:"Uganda",UM:"U.S. Minor Outlying Islands",US:"United States",UY:"Uruguay",UZ:"Uzbekistan",VA:"Vatican City",VC:"Saint Vincent and the Grenadines",VD:"North Vietnam",VE:"Venezuela",VG:"British Virgin Islands",VI:"U.S. Virgin Islands",VN:"Vietnam",VU:"Vanuatu",WF:"Wallis and Futuna",WK:"Wake Island",WS:"Samoa",YD:"People's Democratic Republic of Yemen",YE:"Yemen",YT:"Mayotte",ZA:"South Africa",ZM:"Zambia",ZW:"Zimbabwe",ZZ:"Unknown or Invalid Region" };

        var countriesArray = $.map(countries, function(value, key) {
          return {
            value: value,
            data: key
          };
        });

        // initialize autocomplete with custom appendTo
        $('#autocomplete-custom-append').autocomplete({
          lookup: countriesArray
        });
      });
    </script>
    <!-- /jQuery autocomplete -->
	<!-- Starrr -->
    <script>
      $(document).ready(function() {
        $(".stars").starrr();

        $('.stars-existing').starrr({
          rating: 4
        });

        $('.stars').on('starrr:change', function (e, value) {
          $('.stars-count').html(value);
        });

        $('.stars-existing').on('starrr:change', function (e, value) {
          $('.stars-count-existing').html(value);
        });
      });
    </script>
    <!-- /Starrr -->
		
		
		<script>
		// Bar chart
		  var ctx = document.getElementById("mybarChart");
		  var mybarChart = new Chart(ctx, {
			type: 'bar',
			data: {
			   labels: ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","51","52"],
			  datasets: [{
				label: '# of Votes',
				backgroundColor: "green",
				data: [51,12,40, 28, 92, 50, 45]
			  }, {
				label: '# of Votes',
				backgroundColor: "red",
				data: [-41, -56, -25, -48, -72, -34, -12]
			  }]
			},

			options: {
			  scales: {
				yAxes: [{
				  ticks: {
					beginAtZero: true
				  }
				}]
			  }
			}
		  });
		</script>
		<script>
		  Morris.Bar({
			  element: 'graph_bar',
			  data: [
				{device: '15', geekbench: 1371},
				{device: '16', geekbench: 1371},
				{device: '17', geekbench: 1371},
				{device: '18', geekbench: 1371},
				{device: '19', geekbench: 1371},
				{device: '20', geekbench: 1371},
				{device: '21', geekbench: 1371},
				{device: '22', geekbench: 1371},
				{device: '23', geekbench: 1371},
				{device: '24', geekbench: 1371},
				{device: '25', geekbench: 1371},
				{device: '26', geekbench: 1371},
				{device: '27', geekbench: 1371},
				{device: '28', geekbench: 1371},
				{device: '29', geekbench: 1371},
				{device: '30', geekbench: 1371},
				{device: '31', geekbench: 1371},
				{device: 'Feb'},
				{device: '1 ', geekbench: 380},
				{device: '2', geekbench: 655},
				{device: '3', geekbench: 275},
				{device: '4', geekbench: 1571},
				{device: '5', geekbench: 1371},
				{device: '6', geekbench: 1371},
				{device: '7', geekbench: 1371},
				{device: '8', geekbench: 1371},
				{device: '9', geekbench: 1371},
				{device: '10', geekbench: 1371},
				{device: '10', geekbench: 1371},
				{device: '12', geekbench: 1371},
				{device: '13', geekbench: 1371},
				{device: '14', geekbench: 1371}
			  ],
			  xkey: 'device',
			  ykeys: ['geekbench'],
			  labels: ['Geekbench'],
			  barRatio: 0.4,
			  barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
			  xLabelAngle: 35,
			  hideHover: 'auto',
			  resize: true
			});
		</script>
		<script>
		  var echartDonut = echarts.init(document.getElementById('echart_donut'), theme);
      
      echartDonut.setOption({
        tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        calculable: true,
        legend: {
          x: 'center',
          y: 'bottom',
          data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              type: ['pie', 'funnel'],
              option: {
                funnel: {
                  x: '25%',
                  width: '50%',
                  funnelAlign: 'center',
                  max: 1548
                }
              }
            },
            /*restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }*/
          }
        },
        series: [{
          name: 'Access to the resource',
          type: 'pie',
          radius: ['35%', '55%'],
          itemStyle: {
            normal: {
              label: {
                show: false
              },
              labelLine: {
                show: false
              },
            },
            emphasis: {
              label: {
                show: true,
                position: 'center',
                textStyle: {
                  fontSize: '14',
                  fontWeight: 'normal'
                }
              }
            }
          },
          data: [{
            value: 335,
            name: 'Direct Access'
          }, {
            value: 310,
            name: 'E-mail Marketing'
          }, {
            value: 234,
            name: 'Union Ad'
          }, {
            value: 135,
            name: 'Video Ads'
          }, {
            value: 1548,
            name: 'Search Engine'
          }]
        }]
      });

		</script>
		<script>
		  var echartDonut = echarts.init(document.getElementById('echart_donut1'), theme);
      
      echartDonut.setOption({
        tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        calculable: true,
        legend: {
          x: 'center',
          y: 'bottom',
          data: ['Positive', 'Negative']
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              type: ['pie', 'funnel'],
              option: {
                funnel: {
                  x: '25%',
                  width: '50%',
                  funnelAlign: 'center',
                  max: 1548
                }
              }
            },
            /*restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }*/
          }
        },
        series: [{
          name: 'Access to the resource',
          type: 'pie',
          radius: ['35%', '55%'],
          itemStyle: {
            normal: {
              label: {
                show: false
              },
              labelLine: {
                show: false
              }
            },
            emphasis: {
              label: {
                show: true,
                position: 'center',
                textStyle: {
                  fontSize: '14',
                  fontWeight: 'normal',
				  color:'red',
                }
              }
            }
          },
          data: [{
            value: 35,
            name: 'Positive',
			
			
          }, {
            value: 100,
            name: 'Negative'
          }]
        }]
      });

		</script>
		<script>
			function sliceSize(dataNum, dataTotal) {
  return (dataNum / dataTotal) * 360;
}
function addSlice(sliceSize, pieElement, offset, sliceID, color) {
  $(pieElement).append("<div class='slice "+sliceID+"'><span></span></div>");
  var offset = offset - 1;
  var sizeRotation = -179 + sliceSize;
  $("."+sliceID).css({
    "transform": "rotate("+offset+"deg) translate3d(0,0,0)"
  });
  $("."+sliceID+" span").css({
    "transform"       : "rotate("+sizeRotation+"deg) translate3d(0,0,0)",
    "background-color": color
  });
}
function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
  var sliceID = "s"+dataCount+"-"+sliceCount;
  var maxSize = 179;
  if(sliceSize<=maxSize) {
    addSlice(sliceSize, pieElement, offset, sliceID, color);
  } else {
    addSlice(maxSize, pieElement, offset, sliceID, color);
    iterateSlices(sliceSize-maxSize, pieElement, offset+maxSize, dataCount, sliceCount+1, color);
  }
}
function createPie(dataElement, pieElement) {
  var listData = [];
  $(dataElement+" span").each(function() {
    listData.push(Number($(this).html()));
  });
  var listTotal = 0;
  for(var i=0; i<listData.length; i++) {
    listTotal += listData[i];
  }
  var offset = 0;
  var color = [
    "cornflowerblue", 
    "olivedrab", 
    "orange", 
    "tomato", 
    "crimson", 
    "purple", 
    "turquoise", 
    "forestgreen", 
    "navy", 
    "gray"
  ];
  for(var i=0; i<listData.length; i++) {
    var size = sliceSize(listData[i], listTotal);
    iterateSlices(size, pieElement, offset, i, 0, color[i]);
    $(dataElement+" li:nth-child("+(i+1)+")").css("border-color", color[i]);
    offset += size;
  }
}
createPie(".pieID.legend", ".pieID.pie");

		</script>
		
		<script>
  
    $('#positive').doughnutChart({
        positiveColor: "green",
        negativeColor: "red",
        backgroundColor: "white",
        percentage: 52,
        size: 100,
        doughnutSize: 0.35,
        innerText: "52%",
        innerTextOffset: 12,
        Title: "Share of the popular vote",
        positiveText: "52.5% Barack Obama",
        negativeText: "47.5% Others"
    });
</script>
		 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		   
		<script>

		$(document).ready(function(){
		$(function() {
		var startDate;
		var endDate;

		var selectCurrentWeek = function() {
		window.setTimeout(function () {
		$('#weekpicker').datepicker('widget').find('.ui-datepicker-current-day a').addClass('ui-state-active')
		}, 1);
		}

		$('#weekpicker').datepicker( {
		showWeek: true,
		showOtherMonths: false,
		selectOtherMonths: false,
		onSelect: function(dateText, inst) { 

		var date = $(this).datepicker('getDate');
		startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay());
		endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 6);
		var dateFormat = inst.settings.dateFormat || $.datepicker._defaults.dateFormat;
		$('#weekpicker').val($.datepicker.iso8601Week(new Date(dateText)) + 'Week -( ' + $.datepicker.formatDate( dateFormat, startDate, inst.settings )
		+ ' - ' + $.datepicker.formatDate( dateFormat, endDate, inst.settings ) + ' ) ' );

		selectCurrentWeek();
		},
		beforeShow: function() {
		selectCurrentWeek();
		},
		beforeShowDay: function(date) {
		var cssClass = '';
		if(date >= startDate && date <= endDate)
		cssClass = 'ui-datepicker-current-day';
		return [true, cssClass];
		},
		onChangeMonthYear: function(year, month, inst) {
		selectCurrentWeek();
		}
		}).datepicker('widget').addClass('ui-weekpicker');

		$('.ui-weekpicker .ui-datepicker-calendar tr').live('mousemove', function() { $(this).find('td.ui-state-default a').addClass('ui-state-hover'); });
		$('.ui-weekpicker .ui-datepicker-calendar tr').live('mouseleave', function() { $(this).find('td a').removeClass('ui-state-hover'); });
		});
		});
		</script>


  
	</body>
</html>