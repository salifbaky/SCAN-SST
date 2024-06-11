"use strict";

//Carts initialization
(function() {
	//Global Defaults
	Chart.defaults.global.defaultFontColor = '#444';
	Chart.defaults.global.defaultFontFamily = 'sans-serif';
	Chart.defaults.global.defaultFontSize = 11;
	//Yearly visitors
	var $canvasesYearlyVisitors = jQuery('.canvas-chart-incidents');
	if ($canvasesYearlyVisitors.length) {
		$canvasesYearlyVisitors.each(function(i){

			var MONTHS = ["Jan", "Feb", "Mar", "Apr", "May", "Jun"];
			var config = {
				type: 'bar',
				data: {
					labels: MONTHS,
					datasets: [

                    {
						label: "Accidents Mortels",
						backgroundColor: 'rgba(244, 2, 21, 0.7)',
						borderColor: 'rgba(244, 161, 21, 0.5)',
                        borderWidth: '0',
                        tension: '0',
						//visitors per month
						data: [2, 5, 8, 10, 3, 0],
						fill: true,
					},

					{
						label: "Presqu'Accidents",
						backgroundColor: 'rgba(24, 110, 201, 0.4)',
						borderColor: 'rgba(244, 161, 21, 0.5)',
                        borderWidth: '0',
                        tension: '0',
						//visitors per month
						data: [20, 50, 80, 100, 30, 50],
						fill: true,
					},

					{
						label: "Accidents Avec Arrêt",
						backgroundColor: 'rgba(0, 0, 21, 0.3)',
						borderColor: 'rgba(244, 161, 21, 0.5)',
                        borderWidth: '0',
                        tension: '0',
						//visitors per month
						data: [10, 30, 45, 10, 27, 4],
						fill: true,
					},

					//put new dataset here if needed to show multiple datasets on one graph
					]
				},
				options: {
					responsive: true,
					title:{
						display:true,
						text:"Type d'incident 2024" //Yearly Visitors
					},
					tooltips: {
						mode: 'index',
						intersect: false,
					},
					hover: {
						mode: 'nearest',
						intersect: true
					},
					scales: {
						xAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Mois'
							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Nombre'
							}
						}]
					}
				}
			};


			var canvas = jQuery(this)[0].getContext("2d");;

			new Chart(canvas, config);
		});
	} //Yearly visitors

	//Monthly visitors
	var $canvasesMonthlyVisitors = jQuery('.canvas-chart-recommandations');
	if ($canvasesMonthlyVisitors.length) {
		$canvasesMonthlyVisitors.each(function(i){

			var DAYS = ["Jan", "Feb", "Mar", "Apr", "May", "Jun"];
			var config = {
				type: 'line',
				data: {
					labels: DAYS,
					datasets: [{
						label: "Recommandations non taitées",
						backgroundColor: 'rgba(236, 104, 46, 0.1)',
						borderColor: 'rgba(236, 104, 46, 0.1)',
                        borderWidth: '0',
                        tension: '0',
						//visitors per month
						data: [

							46,
							25,
							1,
							45,
                            12,
                            37,
                            24,

						],
						fill: true,
					},
                    {
						label: "Recommandations traitées",
						backgroundColor: 'rgba(0, 104, 4, 0.5)',
						borderColor: 'rgba(0, 104, 4, 0.5)',
                        borderWidth: '0',
                        tension: '0',
						//visitors per month
						data: [

							30,
							27,
							4,
							45,
                            10,
                            25,
                            50,

						],
						fill: false,
					}
					//put new dataset here if needed to show multiple datasets on one graph
					]
				},
				options: {
					responsive: true,
					title:{
						display:true,
						text:'Recommandations'
					},
					tooltips: {
						mode: 'index',
						intersect: false,
					},
					hover: {
						mode: 'nearest',
						intersect: true
					},
					scales: {
						xAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Mois'
							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Nombre'
							}
						}]
					}
				}
			};


			var canvas = jQuery(this)[0].getContext("2d");;

			new Chart(canvas, config);
		});
	} //Yearly visitors


})();
