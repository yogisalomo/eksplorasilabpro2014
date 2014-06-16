tabel.controller("TableController", function($scope){
	$scope.grupA = [
		{
			name: 'Brazil',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '13 Jun',
					time : '03.00',
					versus : 'Croatia'
				},
				{
					date : '18 Jun',
					time : '02.00',
					versus : 'Mexico'
				},
				{
					date : '24 Jun',
					time : '03.00',
					versus : 'Cameroon'
				}
			],
			show : false
		},
		{
			name: 'Croatia',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '13 Jun',
					time : '03.00',
					versus : 'Brazil'
				},
				{
					date : '19 Jun',
					time : '05.00',
					versus : 'Cameroon'
				},
				{
					date : '24 Jun',
					time : '03.00',
					versus : 'Mexico'
				}
			],
			show : false
		},
		{
			name: 'Mexico',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '13 Jun',
					time : '23.00',
					versus : 'Cameroon'
				},
				{
					date : '18 Jun',
					time : '02.00',
					versus : 'Brazil'
				},
				{
					date : '24 Jun',
					time : '03.00',
					versus : 'Croatia'
				}
			],
			show : false
		},
		{
			name: 'Cameroon',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '13 Jun',
					time : '23.00',
					versus : 'Mexico'
				},
				{
					date : '19 Jun',
					time : '05.00',
					versus : 'Croatia'
				},
				{
					date : '24 Jun',
					time : '03.00',
					versus : 'Brazil'
				}
			],
			show : false
		}
	];
	$scope.grupB = [
		{
			name: 'Spain',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '14 Jun',
					time : '02.00',
					versus : 'Netherlands'
				},
				{
					date : '19 Jun',
					time : '02.00',
					versus : 'Chile'
				},
				{
					date : '23 Jun',
					time : '23.00',
					versus : 'Australia'
				}
			],
			show : false
		},
		{
			name: 'Netherlands',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '14 Jun',
					time : '02.00',
					versus : 'Spain'
				},
				{
					date : '18 Jun',
					time : '23.00',
					versus : 'Australia'
				},
				{
					date : '23 Jun',
					time : '23.00',
					versus : 'Chile'
				}
			],
			show : false
		},
		{
			name: 'Chile',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		},
		{
			name: 'Australia',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '14 Jun',
					time : '05.00',
					versus : 'Chile'
				},
				{
					date : '18 Jun',
					time : '23.00',
					versus : 'Netherlands'
				},
				{
					date : '23 Jun',
					time : '23.00',
					versus : 'Spain'
				}
			],
			show : false
		}
	];
	$scope.grupC = [
		{
			name: 'Colombia',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '14 Jun',
					time : '23.00',
					versus : 'Greece'
				},
				{
					date : '19 Jun',
					time : '23.00',
					versus : "Cote d'Ivoire"
				},
				{
					date : '25 Jun',
					time : '03.00',
					versus : 'Japan'
				}
			],
			show : false
		},
		{
			name: 'Greece',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '14 Jun',
					time : '23.00',
					versus : 'Colombia'
				},
				{
					date : '20 Jun',
					time : '05.00',
					versus : 'Japan'
				},
				{
					date : '25 Jun',
					time : '03.00',
					versus : "Cote d'Ivoire"
				}
			],
			show : false
		},
		{
			name: "Cote d'Ivoire",
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '15 Jun',
					time : '08.00',
					versus : 'Japan'
				},
				{
					date : '19 Jun',
					time : '23.00',
					versus : 'Colombia'
				},
				{
					date : '25 Jun',
					time : '03.00',
					versus : 'Greece'
				}
			],
			show : false
		},
		{
			name: 'Japan',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '15 Jun',
					time : '08.00',
					versus : "Cote d'Ivoire"
				},
				{
					date : '20 Jun',
					time : '05.00',
					versus : 'Greece'
				},
				{
					date : '25 Jun',
					time : '03.00',
					versus : 'Colombia'
				}
			],
			show : false
		}
	];
	$scope.grupD = [
		{
			name: 'Uruguay',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '15 Jun',
					time : '02.00',
					versus : "Costa Rica"
				},
				{
					date : '20 Jun',
					time : '02.00',
					versus : 'England'
				},
				{
					date : '24 Jun',
					time : '23.00',
					versus : 'Italy'
				}
			],
			show : false
		},
		{
			name: 'Costa Rica',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '15 Jun',
					time : '02.00',
					versus : "Uruguay"
				},
				{
					date : '20 Jun',
					time : '23.00',
					versus : 'Italy'
				},
				{
					date : '24 Jun',
					time : '23.00',
					versus : 'England'
				}
			],
			show : false
		},
		{
			name: 'England',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '15 Jun',
					time : '05.00',
					versus : "Italy"
				},
				{
					date : '20 Jun',
					time : '02.00',
					versus : 'Uruguay'
				},
				{
					date : '24 Jun',
					time : '23.00',
					versus : 'Costa Rica'
				}
			],
			show : false
		},
		{
			name: 'Italy',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '15 Jun',
					time : '05.00',
					versus : "England"
				},
				{
					date : '20 Jun',
					time : '23.00',
					versus : 'Costa Rica'
				},
				{
					date : '24 Jun',
					time : '23.00',
					versus : 'Uruguay'
				}
			],
			show : false
		}
	];
	$scope.grupE = [
		{
			name: 'Switzerland',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '15 Jun',
					time : '23.00',
					versus : "Ecuador"
				},
				{
					date : '21 Jun',
					time : '02.00',
					versus : 'France'
				},
				{
					date : '26 Jun',
					time : '03.00',
					versus : 'Honduras'
				}
			],
			show : false
		},
		{
			name: 'Ecuador',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '15 Jun',
					time : '23.00',
					versus : "Switzerland"
				},
				{
					date : '21 Jun',
					time : '05.00',
					versus : 'Honduras'
				},
				{
					date : '26 Jun',
					time : '03.00',
					versus : 'France'
				}
			],
			show : false
		},
		{
			name: 'France',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '16 Jun',
					time : '02.00',
					versus : "Honduras"
				},
				{
					date : '21 Jun',
					time : '02.00',
					versus : 'Switzerland'
				},
				{
					date : '26 Jun',
					time : '03.00',
					versus : 'Ecuador'
				}
			],
			show : false
		},
		{
			name: 'Honduras',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0,
			matches : [
				{
					date : '16 Jun',
					time : '02.00',
					versus : "France"
				},
				{
					date : '21 Jun',
					time : '05.00',
					versus : 'Ecuador'
				},
				{
					date : '26 Jun',
					time : '03.00',
					versus : 'Switzerland'
				}
			],
			show : false
		}
	];
	$scope.grupF = [
		{
			name: 'Argentina',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		},
		{
			name: 'Bosnia and Herzegovina',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		},
		{
			name: 'Iran',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		},
		{
			name: 'Nigeria',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		}
	];
	$scope.grupG = [
		{
			name: 'Germany',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		},
		{
			name: 'Portugal',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		},
		{
			name: 'Ghana',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		},
		{
			name: 'USA',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		}
	];
		$scope.grupH = [
		{
			name: 'Belgium',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		},
		{
			name: 'Algeria',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		},
		{
			name: 'Russia',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		},
		{
			name: 'Korea Republic',
			play:0,
			win:0,
			draw:0,
			lose:0,
			goal_scored:0,
			goal_conceded:0,
			points:0
		}
	];
	
	$scope.toggleMatchesA = function() {
		$scope.grupA.show = !$scope.grupA.show;
	};
});