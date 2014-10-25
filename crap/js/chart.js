var JS_CHART=null;

			function makeCall(url,param){
				var response;
				$.ajax({url:url,data : {DataSet : param},async:false,cache:false,dataType:"json",success:
					function(data){
						response = data;
					}
				});
				return response;
			}
			function generateChart(url,param,options){
				if(url === null)
					return null;
				data1 = makeCall(url,param);
				if(JS_CHART===null){
					//options.xAxis.categories = data[0];
					//options.yAxis.title.text = "Staff (Total Active = "+data[2][0]+", Inactive = "+data[2][1]+")";
					//options.series = data[1];
/*
					options.title = 
					{
			                text: "Total Active users = "+data[2][0]+" & Inactive users = "+data[2][1]+"<a href='viewUsers.php'>click here</a> for details"
			           };*/

					options.series = [{
						                type: 'pie',
						                name: 'Browser share',
						                data: [
						                    ['Active',  data1[3][0]],
						                    ['Inactive',  data1[3][1]]
						                ],
						                animation: false,
								          point:{
								              events:{
								                  click: function (event) {
								                      location.href = "viewUsers.php";
								                  }
								              }
								          }     
						            }];
					//options.title = "Total Active users = "+data[2][0]+" & Inactive users = "+data[2][1]+"<a href='viewUsers.php'>click here</a> for details";

					var chart = new Highcharts.Chart(options);
					//chart.title = {text:"Total Active users = "+data[2][0]+" & Inactive users = "+data[2][1]+"<a href='viewUsers.php'>click here</a> for details"};
					chart.setSize(450,400);
					JS_CHART = chart;
				}else{
					removeSeriesData();
					var obj = data[1];
					JS_CHART.xAxis[0].setCategories(data[0],false);
					for(var idx in obj)
						JS_CHART.addSeries(obj[idx],false);
					JS_CHART.redraw();
				}
			}
			
			
function generateChart1(url,param,options){
				if(url === null)
					return null;
				data1 = makeCall(url,param);
			
					//options.xAxis.categories = data[0];
					//options.yAxis.title.text = "Staff (Total Active = "+data[2][0]+", Inactive = "+data[2][1]+")";
					//options.series = data[1];
/*
					options.title = 
					{
			                text: "Total Active users = "+data[2][0]+" & Inactive users = "+data[2][1]+"<a href='viewUsers.php'>click here</a> for details"
			           };*/

					options.series = [{
						                type: 'pie',
						                name: 'Browser share',
						                data: [
						                    ['Active',  data1[3][0]],
						                    ['Inactive',  data1[3][1]]
						                ],
						                animation: false,
								          point:{
								              events:{
								                  click: function (event) {
								                      location.href = "viewUDIDUsers.php";
								                  }
								              }
								          }     
						            }];
					//options.title = "Total Active users = "+data[2][0]+" & Inactive users = "+data[2][1]+"<a href='viewUsers.php'>click here</a> for details";

					var chart1 = new Highcharts.Chart(options);
					//chart.title = {text:"Total Active users = "+data[2][0]+" & Inactive users = "+data[2][1]+"<a href='viewUsers.php'>click here</a> for details"};
					chart1.setSize(450,400);
					//JS_CHART = chart;
				
			}			
			
			
			function removeSeriesData(){
				while(JS_CHART.series.length>0)
					JS_CHART.series[0].remove(false);
			}
			function generateChartOptions(div,title){
				var options = {
/*
        					chart: 
						{
            						renderTo: div,
            						type: 'column',
							backgroundColor:'rgba(255, 255, 255, 1.0)',
							borderColor: '#A8BDD1',
							borderWidth: 2				
        					},
        					title: 
						{
            						text: title
        					},
        					xAxis: 
						{
            						categories: [],
            						title: 
							{
                						text: 'Groups'
            						}
        					},
        					yAxis: 
						{
            						min: 0,
            						title: 
							{
                						text: 'Staff'
            						}
        					},

						credits: 
						{
            						enabled: false
        					},*/
			            chart: {
			            	renderTo: div,
			                plotBackgroundColor: null,
			                plotBorderWidth: null,
			                plotShadow: false
			            },
			            title: {text:title},
			            tooltip: {
			        	    pointFormat: '<b>{point.percentage:.1f}%</b>'
			            },
			            plotOptions: {
			                pie: {
			                    allowPointSelect: true,
			                    cursor: 'pointer',
			                    dataLabels: {
			                        enabled: false
			                    },
			                    showInLegend: true
			                }
			            },
        					series: []
    					};
				return options;
			}
			$(document).ready(function(){
					var url = 'getChartData.php';
					options = generateChartOptions('container','Active/Inactive users');
					generateChart(url,'DataSet1',options);
			});